<?php
/**
 * Created by PhpStorm.
 * User: bingbing
 * Date: 2017/4/11
 * Time: 12:50
 */

namespace App\Http\Controllers;


class LoginController
{
    /**
     * 登录首页
     */
    public function index(){
        return view('login.index');
    }

    /**
     * 注册界面
     */
    public function create(){

    }

    /**
     *保存新增用户
     */
    public function store(){

    }
}