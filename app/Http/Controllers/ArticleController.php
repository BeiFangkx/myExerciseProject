<?php
// +----------------------------------------------------------------------
// | fileName:文章
// +----------------------------------------------------------------------
// | time:2018-09-10
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

class ArticleController extends Controller
{

	/**
	 * 文章列表
	 */
	public function getArtcles()
	{
		$artcles = '1';

		return view('artcle',['article'=>$artcles]);
	}


}
