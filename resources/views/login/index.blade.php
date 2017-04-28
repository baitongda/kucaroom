@extends('common/common')
@section('content')
    <div class="page">
        <header class="bar bar-nav">
            <h1 class='title'>古卡</h1>
        </header>
        <div class="content">
            @if($errors->any())
                <div class="alert alert-success" role="alert">{{ $errors->first() }}</div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="list-block">
                    <ul>
                        <li>
                            <div class="item-content">
                                <div class="item-media"><i class="icon icon-form-name"></i></div>
                                <div class="item-inner">
                                    <div class="item-title label">邮箱</div>
                                    <div class="item-input">
                                        <input type="text" name="email" id="emai;">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item-content">
                                <div class="item-media"><i class="icon icon-form-password"></i></div>
                                <div class="item-inner">
                                    <div class="item-title label">密码</div>
                                    <div class="item-input">
                                        <input type="password" class="" name="psw" id="psw">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="content-block">
                    <div class="row">
                        <div class="col-100"><button type="submit" class="button button-big backgroud-color font-color">登录</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
