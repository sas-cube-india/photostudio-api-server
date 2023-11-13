<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoverRequest;
use App\Http\Requests\UpdateCoverRequest;
use App\Models\Cover;
use Illuminate\Support\Facades\Response;
use Throwable;

class CoverController extends Controller
{
    public function index()
    {
        $covers = Cover::latest()->get();
        return response()->json([
            'data'    => $covers,
            'message' => 'Covers reterived successfully',
            'status'  => 200,
        ], 200);
    }

    public function store(StoreCoverRequest $request)
    {
        try {
            $cover = Cover::create($request->validated());

            return Response::json([
                'data'    => $cover,
                'message' => 'Cover created successfully',
                'status'  => 200,
            ], 200);

        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }

    public function show(Cover $cover)
    {
        return response()->json([
            'data'    => $cover,
            'message' => 'Cover reterived successfully',
            'status'  => 200,
        ], 200);
    }

    public function update(UpdateCoverRequest $request, Cover $cover)
    {
        try {
            $cover->update($request->validated());

            return response()->json([
                'data'    => $cover,
                'message' => 'Cover updated successfully',
                'status'  => 200,
            ], 200);

        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }

    public function destroy(Cover $cover)
    {
        try {
            $cover->delete();

            return response()->json([
                'message' => 'Cover deleted successfully',
                'status'  => 200,
            ], 200);

        } catch (Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }
}
