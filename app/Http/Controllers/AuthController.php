<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Interfaces\IAuthService;

class AuthController extends Controller
{
    private $authService;

    public function __construct(IAuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(AuthRequest $request)
    {
        return $this->authService->login($request->email, $request->password);
    }

    public function logout()
    {
        return $this->authService->logout();
    }
}
