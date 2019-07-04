<?php

namespace App\Http\Controllers;

use App\Services\Login\Impl\UserServiceImpl;
use App\Services\Login\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function showHomeLogin()
    {
        return view('Login.Login');
    }

    public function showLogin()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $user = $request->all();
        $result = $this->userService->login($user);
        if ($result) {
            return redirect()->route('home.index');
        }
        return view('Login.Login');
    }

    public function logout()
    {
       $this->userService->logout();
       return redirect()->route('home.login');
    }
}
