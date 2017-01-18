<?php
/**
 * LoginForm.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/17 00:24
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace App\Forms;


class LoginForm extends AbstractForm
{

    protected $rules = [
        'login' => [
            'name' => 'required',
        ],
    ];

    protected $messages = [

    ];

    protected $attributes = [
        'name' => '姓名',
    ];
}