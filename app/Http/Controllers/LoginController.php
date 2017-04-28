<?php
/**
 * Created by PhpStorm.
 * User: bingbing
 * Date: 2017/4/11
 * Time: 12:50
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * create by bingbing
     * 登录首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('login.index');
    }

    /**
     * created by bignbing
     * 用户登陆
     * @param Request $request，string email=用户邮箱,string psw=用户密码
     * @return \Illuminate\Http\JsonResponse
     */
    public function loginUp(Request $request){
        $this->validate($request, [
                'email' => 'required',
                'psw' => 'required',]
        );
        $ret = User::Login($request->input(),$request);
        if($ret)
            return response()->json(['status'=>1,'msg'=>'登陆成功','url'=>'']);//登陆成功会返回跳转的url
        else
            return response()->json(['status'=>0,'msg'=>'邮箱或密码错误','url'=>'']);
    }
}