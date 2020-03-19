<?php

namespace app\validate;

use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'name'  => ['require', 'max' => 20, 'regex' => '/^[^\d]\w+$/'],
        'passwd'   => ['require', 'max' => 20, 'regex' => '/^\w+$/'],
    ];

    protected $message = [
        'admin_user.require'  =>  '用户名必须',
        'admin_user.max' => '名称最多不能超过20个字符',
        'admin_user.regex' => '名称只能包含字母、数字、下划线,并且开头不能为数字',
        'password.require' => '密码不能为空',
        'password.max' => '密码不能超过20个字符',
        'password.regex' => '密码只能包含字母、数字、下划线'
    ];
}
