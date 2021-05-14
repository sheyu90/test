<?php

namespace app\common\model;
use think\Db;
use think\Model;

class MessageBoard extends Model
{
    public function lmsg(){
       return $MessageBoard = MessageBoard::where('reply',0)->paginate(3);
    }
    public function reply(){
       return $MessageBoard = MessageBoard::where('reply',1)->paginate(3);

    }

    public function search($data){
      $keywords = $data['keywords'];
        if($data['keywords']){
          return  Db::table('Message_Board')
        ->where('title','like',"$keywords%")
        ->order('id desc')
        ->select();
        }
    }

    public function section($id){
        return self::where('section',$id)->order('id','desc')->paginate(3);
    }



}
