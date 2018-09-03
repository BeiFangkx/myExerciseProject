<?php
// +----------------------------------------------------------------------
// | fileName:用户
// +----------------------------------------------------------------------
// | time:2018-08-31
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

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

		return 1;
		test(1);
	}
}
