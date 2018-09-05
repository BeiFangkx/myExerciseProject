<?php

// +----------------------------------------------------------------------
// | fileName:公共方法
// +----------------------------------------------------------------------
// | time:2018-06-01
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------


	/**
	 * 测试打印
	 * 
	 * @param  [mixed] $data [打印的数组或者字符串]
	 * 
	 * @return [void]
	 */
	function test($data)
	{
		//判断是否数组
		var_dump($data);

		//中止
		die();
	}


	/**
	 * 统一返回数组
	 */
	function returnJson($data = '', $code = '200', $msg = '请求成功')
	{

		return ['data'=>$data,'code'=>$code,'msg'=>$msg];

	}
