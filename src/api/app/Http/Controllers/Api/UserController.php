<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $userRepository;

    /**
     * Constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Store a newly created user in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return ApiResponse::validationError($validator->errors());
        }

        try {
            // Create a new user using the repository
            $user = $this->userRepository->create($request->all());

            // Return a success response with the created user
            return ApiResponse::success($user);
        } catch (\Throwable $th) {
            // Return an error response if an exception occurs
            return ApiResponse::error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:users,id|min:1',
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return ApiResponse::validationError($validator->errors());
        }

        try {
            // Find the user with the given ID
            $user = $this->userRepository->find($id);

            // Return a success response with the user
            return ApiResponse::success($user);
        } catch (\Throwable $th) {
            // Return an error response if an exception occurs
            return ApiResponse::error($th->getMessage());
        }
    }

    /**
     * Update the specified user in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Return validation errors if validation fails
        if ($validator->fails()) {
            return ApiResponse::validationError($validator->errors());
        }

        try {
            // Update the user using the repository
            $user = $this->userRepository->update($id, $request->all());

            // Return a success response with the updated user
            return ApiResponse::success($user);
        } catch (\Throwable $th) {
            // Return an error response if an exception occurs
            return ApiResponse::error($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            // Delete the user using the repository
            $user = $this->userRepository->delete($id);

            // Return a success response with the deleted user
            return ApiResponse::success($user);
        } catch (\Throwable $th) {
            // Return an error response if an exception occurs
            return ApiResponse::error($th->getMessage());
        }
    }
}
