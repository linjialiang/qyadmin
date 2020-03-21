<?php
// +----------------------------------------------------------------------
// | Captcha配置文件
// +----------------------------------------------------------------------

return [
    // 验证码位数
    'length'     => 5,
    // 验证码过期时间
    'expire'     => 1800,
    // 是否使用中文验证码
    'useZh'      => false,
    // 是否使用算术验证码
    'math'       => false,
    // 是否使用背景图
    'useImgBg'   => false,
    // 验证码字符大小
    'fontSize'   => 25,
    // 是否使用混淆曲线
    'useCurve'   => false,
    // 是否添加杂点
    'useNoise'   => false,
    // 杂色大小
    'fontSizeNoise' => 20,
    // 验证码字体 不设置则随机
    'fontFamily' => '',
    // 背景颜色
    'bg'         => '',
    // 验证码颜色
    'color'      => '',
    // 验证码图片高度
    'imageH'     => 0,
    // 验证码图片宽度
    'imageW'     => 0,
    // 随机运算符号，支持加法(+)、减法(-)、乘法(*)、除法(/)四则运算
    'operators'  => ['+', '-', '*', '/'],

    // 添加额外的验证码设置
    // verify => [
    //     'length'=>4,
    //    ...
    //],
];
