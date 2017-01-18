<?php

namespace App\Forms;

use Validator;

/**
 * AbstractForm.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/16 23:39
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class AbstractForm
{
    /**
     * rules
     * @var array
     */
    protected $rules = [];
    /**
     * messages
     * @var array
     */
    protected $messages = [];
    /**
     * attributes
     * @var array
     */
    protected $attributes = [];

    /**
     * get rules by $scenario
     *
     * @param $scenario
     *
     * @return array
     */
    public function rules($scenario)
    {
        return $this->rules[$scenario] ?: [];
    }

    /**
     * get messages
     * @return array
     */
    public function messages()
    {
        return $this->messages;
    }

    /**
     * get attributes
     * @return array
     */
    public function attributes()
    {
        return $this->attributes;
    }

    /**
     * validate by $scenario
     *
     * @param $scenario
     */
    static public function validate($scenario)
    {
        self::scenario($scenario)->validate();
    }

    /**
     * create validator by $scenario
     *
     * @param $scenario
     *
     * @return \Illuminate\Validation\Validator
     */
    static public function scenario($scenario)
    {
        $instance = new static();
        return Validator::make(
            app('request')->all(),
            $instance->rules($scenario),
            $instance->messages(),
            $instance->attributes()
        );
    }

}