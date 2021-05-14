<?php

namespace app\index\controller;
use think\Request;
use think\Controller;
use think\facade\Session;
class Base extends Controller
{
    function __construct(){
        parent::__construct();
        $this->checkLogin();
    }
    public function checkLogin()
    {
        // var_dump($_SESSION);
    // var_dump(Session::get('user'));

        // var_dump(Session::has('user'));
        if(!Session::has('user')){
            $this->success('请登录',url('index/Login/index'));
        };
    }
}