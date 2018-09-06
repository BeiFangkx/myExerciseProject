<?php

namespace App\Exceptions;

use Exception;
// use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class ApiHandler
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

        if (config('app.debug')) {
            return parent::render($request, $exception);
        }

        $return = [
            'data'             => '1111111',
            'code'             => $exception->getMessage()
        ];
        return $return;

        return $this->handler1($exception);
    }


    public function handler1(Exception $exception)
    {
        //可以处理成需要的格式
        
        $return = [
            'data'             => '1111111',
            'code'             => $exception->getMessage()
        ];
        return $return;
    }



}
