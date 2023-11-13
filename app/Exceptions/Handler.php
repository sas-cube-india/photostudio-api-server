<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Exception $ex, $request) {
            if ($request->is('api/*')) {
                if ($ex instanceof MethodNotAllowedHttpException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => $ex->getStatusCode()], $ex->getStatusCode());
                }

                if ($ex instanceof NotFoundHttpException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => 404], 404);
                }

                if ($ex instanceof ModelNotFoundException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => 404], 404);
                }

                if ($ex instanceof \Illuminate\Validation\ValidationException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => 422], 422);
                }

                if ($ex instanceof \Illuminate\Auth\AuthenticationException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => 401], 401);
                }

                if ($ex instanceof AccessDeniedHttpException) {
                    return response()->json(['message' => $ex->getMessage(), 'status' => 403], 403);
                }

                // return response()->json(['message' => $ex->getMessage(), 'status' => 404], 404);
            }
        });
    }

}
