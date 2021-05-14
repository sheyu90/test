<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\common\model\User;
use app\common\model;
use think\facade\Session;
class Login extends Controller
{
public function index(){

    return view('index@Login/index');


}

public function login(Request $request){
    $input = $request->post();
    // $res = (new User())->login($input);
    // var_dump($res);die;
    if(!(new User())->login($input)){
        return $this->error('登录失败');
    }
    return redirect(url('index/Index/index'))->with('succes','登录成功');
}

public function register(){

    return view('index@Login/register');
}

public function registerHandle(Request $request){


    // var_dump($token);die;
    $input = $request->post();
//    var_dump($input);die;
    if($input['username'] && $input['password']){
        if(!(new User)->register($input)){
            return $this->error('注册失败');
        }
    }
    return redirect(url('index/Login/index'));



}

public function Logout(){
    Session::delete('user');
    return redirect(url('index/Login/index'));
}



}
