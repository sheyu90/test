<?php

namespace app\common\model;

use think\Model;

class create extends Model
{
    protected $table = 'Message_Board';
    public function add(array $data){
        return self::create($data);
    }
}
