<?php

namespace app\common\model;

use think\Model;
use think\Db;

class User extends Model
{
    protected $table = 'user';
    public function login(array $data){
        $ret = false;
        $info = User::getByUsername($data['username']);
        // return $info;
        if($info){
            $password =sha1($info['salt'].$data['password']);
            // return $password;
            if($info['password'] == $password){

                session('user',$info['username']);
                $ret = true;
            }
        }
        return $ret;
    }

    public function register(array $data){
        $str = md5(time());
        $data['salt'] = substr($str,0,5);
        $data['password'] = sha1($data['salt'].$data['password']);
        $reg = $this->allowField(['username','password','salt'])->save($data);
        $uid = $this->id;
        $rid = $data['rolo'];
        $db = Db::table('user_rolo');
        $db->insert([
            'uid' =>$uid,
            'rid' =>$rid
        ]);
        return $reg;
    }
}
