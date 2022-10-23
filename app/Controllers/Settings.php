<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\SettingModel;

class Settings extends BaseController{
    public function index(){
        $data = [
            'title' => 'User setting'
        ];

        return view('settings', $data);
    }
    
    public function update($id){
    }
}