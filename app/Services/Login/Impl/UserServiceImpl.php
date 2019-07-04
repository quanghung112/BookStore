<?php


namespace App\Services\Login\Impl;


use App\Services\Login\UserServiceInterface;
use Illuminate\Support\Facades\Session;

class UserServiceImpl implements UserServiceInterface
{
    public function login($user)
    {
        $username = $user['inputUsername'];
        $password = $user['inputPassword'];
        if ($username == 'admin' && $password == '123456') {
            //Nếu thông tin đăng nhập chính xác, Tạo một Session lưu trữ trạng thái đăng nhập
            Session::push('login', true);
            return true;
        }

        // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        Session::flash('login-fail', $message);
        return false;
    }
    public function logout()
    {
        Session::flush();
    }
}
