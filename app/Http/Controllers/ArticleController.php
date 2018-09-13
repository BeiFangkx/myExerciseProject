<?php
// +----------------------------------------------------------------------
// | fileName:文章
// +----------------------------------------------------------------------
// | time:2018-09-10
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Http\Controllers;

use App\Models\ArticleModel;

class ArticleController extends Controller
{

    protected $articleModel;

    public function __construct(ArticleModel $articleModel)
    {
        $this->articleModel = $articleModel;
    }

	/**
	 * 文章列表
	 */
	public function getArticles()
	{
		$artcles = $this->articleModel->paginate(2);

		return view('article/list',['artcles'=>$artcles]);
	}

	/**
	 * 文章详细
	 */
	public function getArticle()
	{
		$ID = request()->route('id');

		$article = $this->articleModel->find($ID);

		return view('article/info',['article'=>$article]);
	}


}
