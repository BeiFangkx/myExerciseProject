<?php
// +----------------------------------------------------------------------
// | fileName:数据层基类
// +----------------------------------------------------------------------
// | time:2018-09-05
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{

	/**
	 * web 分页
	 */
	public function findPaginates($where = [], $field = [], $order = [], $paginate = '15')
	{
		return $this->simplePaginate($paginate);
	}

}
