<?php
// +----------------------------------------------------------------------
// | fileName:用户逻辑
// +----------------------------------------------------------------------
// | time:2018-09-05
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Logics;

use App\Logics\Base;
use App\models\UserModel;
use Illuminate\Support\Facades\DB;

class UserLogic  extends Base
{

	/**
	 * 用户登录
	 */
	public function store($userName,$userPsw)
	{
		$where = [
			['userName','=',$userName]
		];

		$ret = UserModel::where($where)->find(1)->toArray();

		if ($ret && $ret['userPsw'] == $userPsw) {
			return '1';
		}else{
			return '查询不到';
		}

		
	}

}
