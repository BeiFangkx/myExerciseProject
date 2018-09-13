<?php
// +----------------------------------------------------------------------
// | fileName:文章详细页面
// +----------------------------------------------------------------------
// | time:2018-09-13
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use App\Models\ArticleModel;

class InfoController extends Controller
{

	/**
	 * 首页
	 */
	public function getArticle()
	{
		$articleModel = new ArticleModel();

		$artcle = $articleModel->where('ID','=','1')->get();

		return view('info',['artcle'=>$artcle]);
	}

}
