<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\SettingModel;

class Settings extends BaseController{
    protected $SettingModel;

    public function __construct(){
        $this->SettingModel = new SettingModel();
    }

    public function index(){
        $data = [
            'title' => 'User setting'
        ];

        $usrdata = $this->SettingModel->get_user();

        $dd($usrdata);

        return view('settings', $data);
    }
    
    public function update($id){
    }
}