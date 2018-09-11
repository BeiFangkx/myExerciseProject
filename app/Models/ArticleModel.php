<?php
// +----------------------------------------------------------------------
// | fileName:用户数据层
// +----------------------------------------------------------------------
// | time:2018-09-05
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Models;

use App\Models\Base;

class ArticleModel  extends Base
{
	//设置表名称
	protected $table     = 'article'; 

	public function getArtcles()
	{
		$ret = $this->get();

		return $ret;
	}

}
