<?php

namespace App\Http\Controllers;

use App\Events\newcostomerrequist;
use App\Models\costomer;
use App\Models\costomerrequist;
use App\Models\otpveryfication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CostomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(["costomer" => costomer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //

        // $otp = otpveryfication::where([['token', $req->header('otptoken')], ['otp', $req->otp]])->first();

        // if (!$otp) {
        //     # code...
        //     return response(["msg" => "Wrong otp"], 202);
        // }

        $costomer = new costomerrequist;
        $costomer->name = $req->name;
        $costomer->phone_no = $req->phone_no;
        $costomer->email = $req->email;
        $costomer->compunys_name = $req->compunys_name;
        $costomer->compunys_logo = $req->compunys_logo;
        $costomer->social_link = $req->social_link;
        $costomer->social_link = $req->social_link;
        $costomer->address = $req->address;
        $costomer->state = $req->state;
        $costomer->country = $req->country;
        $costomer->save();

        event(new newcostomerrequist("$costomer->name Send To Register Request"));

        return response(["msg" => "$costomer->name You are Register Successfully"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function aprovedReq(costomerrequist $costomerreq, $id)
    {
        //
        $costomerRequst = $costomerreq->where('id',$id)->first();

        // dd($costomerRequst->toArray());

        if (!$costomerRequst) {
            # code...
            return response(["msg" => "approved requst"], 200);
        }

        $costomer = new costomer;
        $costomer->name = $costomerRequst->name;
        $costomer->name = $costomerRequst->name;
        $costomer->save();
        $costomer->password = Hash::make($costomerRequst->password);

        $costomerRequst->destroy($id);

        return response(["msg" => "Approved"], 200);
    }
    public function show(costomer $costomer,)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function edit(costomer $costomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, costomer $costomerd, $id)
    {
        //
        $costomerd->find($id)->update([
            "name" => $req->name,
            "phone_no" => $req->phone_no,
            "email" => $req->email,
            "state" => $req->state,
            "country" => $req->country,
            "default_address" => $req->default_address,
        ]);

        return response(["msg" => "Costomer Updated Successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\costomer  $costomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(costomer $costomer, $id)
    {
        //
        $costomers = $costomer->find($id)->first();
        // $costomer->destroy($id);

        return response(["$costomers Deleted Successfully"]);
    }
    public function statusUpdate(Request $req,costomer $costomer, $id)
    {
        //
        $costomers = $costomer->find($id)->update([
           "status"=>$req->status
        ]);
        // $costomer->destroy($id);

        return response(["$costomers Status Updated Successfully"]);
    }
    public function passwordUpdate(Request $req,costomer $costomer, $id)
    {
        //
        $costomers = $costomer->find($id)->update([
            "password"=>Hash::make($req->password)
        ]);
        // $costomer->destroy($id);

        return response(["$costomers Password Updated Successfully"]);
    }
}

// {
// "name":"",
// "phone_no":"",
// "email":"",
// "password":"",
// "state":"",
// "country":"",
// "address":"",
// }
