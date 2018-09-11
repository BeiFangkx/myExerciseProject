<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SidebarsComposer
{
    public function compose(View $view)
    {

    	//标签列表
        $labels = DB::table('label')->get();
        //用户个人信息
		$user['userName'] = '我是小北方呀';
		$user['headImg']  = 'https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1536657669&di=6bbedc0faba6573e8c533860d3cbd72a&src=http://5b0988e595225.cdn.sohucs.com/q_70,c_zoom,w_640/images/20180728/ac1ee18d1f9a40f680fb480a4ce2eedd.jpeg';
		$user['userDesc'] = '记录自己在技术上和生活中的故事.';

        $view->with('labels', $labels);
        $view->with('user', $user);
    }
}