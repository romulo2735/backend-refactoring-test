<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers(): Collection
    {
        return User::all();
    }

    public function getUser($user)
    {
        return User::query()->find($user->id);
    }

    public function createUser(array $data)
    {
        return User::query()->create($data);
    }

    public function updateUser(User $user, array $data)
    {
        return $user->update($data);
    }

    public function deleteUser(User $user)
    {
        return $user->delete();
    }
}
