<?php

namespace App\Controllers;
use App\Models\DeviceModel;
class Device extends BaseController
{
    public function __construct()
    {
        $this->devicemodel=new DeviceModel();
    }
    public function index()
    {
        $device=$this->devicemodel->findAll();
        $data = [
            'title' => 'Daftar Device',
            'device' => $device
        ];
        return view('device/index', $data);
    }
}