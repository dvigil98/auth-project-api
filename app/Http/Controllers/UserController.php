<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Interfaces\IUserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->getUsers();
    }

    public function store(StoreUserRequest $request)
    {
        return $this->userService->saveUser($request);
    }

    public function show(string $id)
    {
        return $this->userService->getUser($id);
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        return $this->userService->updateUser($request, $id);
    }

    public function destroy(string $id)
    {
        return $this->userService->deleteUser($id);
    }

    public function search(string $critery, string $value)
    {
        return $this->userService->searchUsers($critery, $value);
    }
}
