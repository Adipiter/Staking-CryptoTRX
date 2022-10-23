<?php
namespace App\Models;
use CodeIgniter\Model;

class SettingModel extends model{
	protected $table = 'users';

    public function get_user(){
		return $this->findAll();
    }
}