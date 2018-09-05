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

class UserModel  extends Base
{

    //const CREATED_AT = 'creation_date';//自定义存储的时间戳
    //const UPDATED_AT = 'last_update';//自定义更新的时间戳

	//设置表名称
	protected $table     = 'user'; 
	//设置主键类型(默认为int)
	//protected $keyType   = string;
	//设置主键不自增长(默认自增长)
	//public $incrementing = false;
	//默认数据表中存在 created_at 和 updated_at 这两个字段,不需要则false
	//public $timestamps   = false;
    //模型的日期字段的存储格式
    //protected $dateFormat = 'U';
    //此模型的连接名称(默认为datebase.php设置的)
    //protected $connection = 'connection-name';

}
