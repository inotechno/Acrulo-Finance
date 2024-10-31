<?php

namespace App\Helpers;

class ApiResponse
{
    public static function success($data = null, $message = 'Operation successful', $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function error($message = 'Something went wrong', $code = 500, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $data
        ], $code);
    }

    public static function validationError($errors, $message = 'Validation failed', $code = 422)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors
        ], $code);
    }

    public static function notFound($message = 'Resource not found', $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $data
        ], 404);
    }

    public static function unauthorized($message = 'Unauthorized access', $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $data
        ], 401);
    }

    public static function forbidden($message = 'Access forbidden', $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $data
        ], 403);
    }

    public static function noContent($message = 'No content')
    {
        return response()->json([
            'status' => 'success',
            'message' => $message
        ], 204);
    }

    public static function conflict($message = 'Data conflict', $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $data
        ], 409);
    }
}
