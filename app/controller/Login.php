<?php

namespace app\controller;

use app\BaseController;
use think\facade\View;
use app\model\Admin as ModelAdmin;
use app\validate\Login as ValidateLogin;

class Login extends BaseController
{
    public function login()
    {
        return View::fetch();
    }

    public function register()
    {
        return View::fetch();
    }

    /**
     * 登陆验证
     *
     * @return void
     */
    public function verifyLogin()
    {
        $data = $_POST;

        $this->verifyCaptcha($data['captcha']);

        return json($data);
    }

    /**
     * 注册验证
     *
     * @return void
     */
    public function verifyRegister()
    {
        $data = $_POST;

        // $this->verifyCaptcha($data['captcha']);

        $captcha = $data['captcha'];

        if (!captcha_check($captcha)) {
            //验证失败
            return "认证失败";
        };

        return json($captcha);

        // $qy_data = new ModelAdmin();

        // // 验证
        // try {
        //     validate(ValidateLogin::class)->check([
        //         'admin_user'  => $data['username'],
        //         'password' => $data['password'],
        //     ]);
        // } catch (ValidateException $e) {
        //     // 验证失败 输出错误信息
        //     dump($e->getError());
        // }

        // $result = $qy_data->save([
        //     'admin_user' => $data['username'],
        //     'password' => $data['password'],
        //     'power' => 1,
        //     'status' => 0
        // ]);

        // if($result){
        //     $data = [
        //         'username' => $data['username'],
        //         'password' => $data['password']
        //     ];
        //     return $data;
        // }else{
        //     return json($result);
        // }
    }

    /**
     * 验证码验证
     *
     * @return void
     */
    protected function verifyCaptcha($captcha)
    {
        if (!captcha_check($captcha)) {
            //验证失败
            return false;
        };

        return json($captcha);
    }
}
