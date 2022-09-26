<?php
namespace App\Models;
use CodeIgniter\Model;

class SettingModel extends model{
	protected $db;
	public function __contruct(){
		$this->$db = \Config\Database::connect();
	}

    public function get_user(){
		$sql = "SELECT * FROM users";
		$query = $this->$db->query($sql);
		$data= $query->getResultArray();

		return $data;
    }
}