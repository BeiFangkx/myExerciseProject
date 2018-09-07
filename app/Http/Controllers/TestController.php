<?php
// +----------------------------------------------------------------------
// | fileName:测试类
// +----------------------------------------------------------------------
// | time:2018-08-31
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

class TestController extends Controller
{

	/**
	 * 测试方法
	 */
	public function info()
	{
		return 1/0;

		return $this->thisBaseFunc();
	}

	/**
	 * 打印php信息
	 */
	public function echoPhpInfo()
	{
		echo phpinfo();
	}

}
