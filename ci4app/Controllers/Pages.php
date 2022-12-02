<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Home | Web Programming'
        ];
        
        return view('pages/home', $data);
    }

}