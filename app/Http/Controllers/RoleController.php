<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Interfaces\IRoleService;

class RoleController extends Controller
{
    private $roleService;

    public function __construct(IRoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        return $this->roleService->getRoles();
    }

    public function store(StoreRoleRequest $request)
    {
        return $this->roleService->saveRole($request);
    }

    public function show(string $id)
    {
        return $this->roleService->getRole($id);
    }

    public function update(UpdateRoleRequest $request, string $id)
    {
        return $this->roleService->updateRole($request, $id);
    }

    public function destroy(string $id)
    {
        return $this->roleService->deleteRole($id);
    }

    public function search(string $critery, string $value)
    {
        return $this->roleService->searchRoles($critery, $value);
    }
}
