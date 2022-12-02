<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
    protected $table= 'device';

    public function getDevice($slug=false){
        if($slug==false){
          return $this->findall();  
        }

        return $this->where(['slug'=>$slug])->first();
    }
}