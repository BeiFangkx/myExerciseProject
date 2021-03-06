<?php
// +----------------------------------------------------------------------
// | fileName:首页
// +----------------------------------------------------------------------
// | time:2018-09-10
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use App\Models\ArticleModel;

class HomeController extends Controller
{

	/**
	 * 首页
	 */
	public function Index()
	{
		$articleModel = new ArticleModel();

		$artcles = $articleModel->take(5)->get();

		return view('index',['artcles'=>$artcles]);
	}

}
