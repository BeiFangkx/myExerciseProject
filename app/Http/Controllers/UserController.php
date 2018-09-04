<?php
// +----------------------------------------------------------------------
// | fileName:用户
// +----------------------------------------------------------------------
// | time:2018-08-31
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
{

	/**
	 * 登录页面
	 */
	public function login()
	{
		return view('login');
	}

	/**
	 * 登录
	 */
	public function register()
	{	
		//获取参数
		$data = request()->post();

		$credentials['username'] = $data['username'];

		

        if (Auth::attempt($credentials, request()->has('username'))) {
            if(Auth::user()->activated) {
               session()->flash('success', '欢迎回来！');
               return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
               Auth::logout();
               session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活。');
               //return redirect('/');
           }
        } else {
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back();
        }

	}

}
