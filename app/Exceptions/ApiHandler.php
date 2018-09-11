<?php
// +----------------------------------------------------------------------
// | fileName:Api接口自定义异常返回
// +----------------------------------------------------------------------
// | time:2018-09-07
// +----------------------------------------------------------------------
// | Author: kuangxi(774921903@qq.com)
// +----------------------------------------------------------------------

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class ApiHandler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     * 定义无需报告的异常类型
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return $this->handler($exception);
    }

    /**
     * 自定义返回异常方法
     */
    public function handler(Exception $exception)
    {
        $return = [
            'data' => '',
            'code' => '400',
            'msg'  => '错误为:'.$exception->getMessage().',文件地址:'.$exception->getFile().',行数:'.$exception->getLine()
        ];

        //这里要返回实例,所以加了response,踩了一个坑
        return response($return);
    }



}
