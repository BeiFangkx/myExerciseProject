<?php
// +----------------------------------------------------------------------
// | fileName:web页面的部分数据共享
// +----------------------------------------------------------------------
// | time:2018-09-11
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * 共享数据,启动相应的服务
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.header'], 'App\Http\ViewComposers\MenusComposer');
        View::composer(['layouts.sidebar'], 'App\Http\ViewComposers\SidebarsComposer');
    }

    /**
     * 注册东西
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
