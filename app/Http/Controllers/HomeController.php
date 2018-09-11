<?php
// +----------------------------------------------------------------------
// | fileName:首页
// +----------------------------------------------------------------------
// | time:2018-09-10
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\ArticleModel;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{

	/**
	 * 首页
	 */
	public function Index()
	{
		$articleModel = new ArticleModel();

		$artcles = $articleModel->paginate(15);

		if ($artcles) {
			//$artcles = $artcles->toArray();
		}

		return view('index',['artcles'=>$artcles]);
	}

}
