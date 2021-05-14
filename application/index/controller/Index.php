<?php

namespace app\index\controller;
use think\Request;
use think\Controller;
use  app\common\model\MessageBoard;
use app\common\model\create;

class Index extends Base
{
    public function index(){
        $mb = new MessageBoard();
        $lmsg = $mb->lmsg();
        // $repyl = $mb->repyl();
        // print_r($res);die;
        return view('index@index/index',compact('lmsg'));
    }

    public function create(){

        return view('index@index/create');
    }

    public function search(Request $request){
        $input = $request->get();
        // var_dump($input['keywords']);
        if($input['keywords']){
            // var_dump($input['keywords']);
        $res=(new MessageBoard())->search($input);
        // var_dump($res);
        return view('index@index/search',compact('res'));
        }
    }

    public function add(Request $resquest){

        $input = $resquest->post();
        // // var_dump($input);die;
        (new create())->add($input);
        return redirect(url("index/Index/index"))->with('succes','添加成功');
        // return view('index@index/create');

    }

    public function section($id){
        $res = (new MessageBoard())->section($id);
//        var_dump($id);die;
        return view('index@index/section',compact('res'));
    }

    public function delete(){

        var_dump(session('user'));

    }

}