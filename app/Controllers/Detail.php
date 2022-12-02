<?php

namespace App\Controllers;
use App\Models\DeviceModel;
class Detail extends BaseController
{
    public function __construct()
    {
        $this->devicemodel=new DeviceModel();
    }
    public function index($slug)
    {
        $data=[
            'title'=>'Detail Device',
            'device'=>$this->devicemodel->getDevice($slug)
        ];

        return view('detail/index',$data);
    }
}