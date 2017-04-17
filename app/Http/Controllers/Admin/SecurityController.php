<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecurityController extends Controller
{
    //登录方法
    public function login(){
        //加载resouces/views/security/login.blade.php模板文件
        return view('security/login');
    }
    
    //登录验证
    public function loginCheck(Request $request){
        dd($request->input('captcha.name'));
    }
    
    
    
    
    
    
    
    
}
