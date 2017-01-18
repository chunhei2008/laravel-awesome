<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Forms\LoginForm;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{

    public function __construct()
    {
    }


    public function index(Request $request)
    {
        if ($request->get('name')) {
            return response()->json(
                [
                    'code'     => 1,
                    'response' => [],
                    'message'  => 'OK',
                ]
            );

        } else {
            throw new ApiException('数据错误');
        }
    }

    public function index2(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',

            ]
        );

        return 'success';
    }

    public function index3()
    {
        LoginForm::validate('login');

        return 'success';
    }

    public function index4()
    {
        $validate = LoginForm::scenario('login');

        if ($validate->fails()) {
            throw new ValidationException($validate);
        }
        return 'success';
    }

}