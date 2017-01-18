<?php
namespace App\Exceptions;
use Exception;

/**
 * ApiException.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/16 21:44
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class ApiException extends Exception
{
    public function __construct($message = "", $code = -1, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}