<?php

namespace app\controller;

use app\BaseController;
use linjialiang\captcha\facade\Captcha;
use think\facade\View;

class Login extends BaseController
{
    public function index()
    {
        fetch
    }

    /**
     * 创建验证码 function
     *
     * @return void
     */
    public function captcha()
    {
        return Captcha::create();
    }
}
