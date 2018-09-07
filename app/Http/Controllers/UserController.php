<?php
// +----------------------------------------------------------------------
// | fileName:用户
// +----------------------------------------------------------------------
// | time:2018-08-31
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use App\Logics\UserLogic;

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
	public function signIn()
	{	
		//获取参数
		$data = request()->post();

		$credentials['userName'] = $data['userName'];
return 1;
		//用户登录
		$UserLogic = new UserLogic;
		$ret = $UserLogic->store($data['userName'],$data['userPsw']);

		return $ret;
	}

	/**
	 *注册
	 */
	public function signUp()
	{	
	}

	public function Index()
	{
		return view('Index');
	}


}
