<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Create a new user
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(array $data)
    {
        return User::create($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  array  $data
     * @return \App\Models\User
     */
    public function update(int $id, array $data)
    {
        $user = User::findOrFail($id);
        return $user->update($data);
    }

    public function delete(int $id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }

    public function find(int $id)
    {
        return User::findOrFail($id);
    }
}
