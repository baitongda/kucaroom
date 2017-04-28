<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'power', 'status', 'type', 'delete'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * created by bingbing
     * 用户登陆
     * @param $data
     * @return bool
     */
    public static function Login($data,$request)
    {
        $user = User::where(['email' => $data['email']])->first();
        if ($user) {
            if (decrypt($user['password']) === $data['psw']) {//登陆成功,写入session
                $request->session()->put('username', $user['name']);
                $request->session()->put('email', $user['email']);
                return true;
            } else {//登陆失败
                return false;
            }
        } else {//登陆失败
            return false;
        }
    }

    public static function loginOut($request)
    {
        $request->session()->flush();
    }
}
