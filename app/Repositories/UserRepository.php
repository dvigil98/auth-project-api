<?php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\User;

class UserRepository implements IUserRepository
{
    public function getAll()
    {
        $users = User::orderBy('id', 'asc')->get();
        return $users;
    }

    public function saveOrUpdate(User $user)
    {
        return $user->save();
    }

    public function getById($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function delete(User $user)
    {
        return $user->delete();
    }

    public function search($critery, $value)
    {
        $users = User::join('roles', 'users.role_id', '=', 'roles.id', 'inner')
            ->select('users.*')
            ->whereNull('users.deleted_at')
            ->whereNull('roles.deleted_at')
            ->where($critery, 'like', "%{$value}%")->get();
        return $users;
    }
}
