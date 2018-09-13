<?php
// +----------------------------------------------------------------------
// | fileName:web路由
// +----------------------------------------------------------------------
// | time:2018-09-10
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

Route::redirect('/', '/index')->name('root');
Route::get('index', 'HomeController@index')->name('home.index');

Route::get('article/info/{id}', 'ArticleController@getArticle')->name('article.info');
Route::get('article/list', 'ArticleController@getArticles')->name('article.list');