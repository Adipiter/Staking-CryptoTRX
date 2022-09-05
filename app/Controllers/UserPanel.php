<?php
namespace App\Controllers;

class UserPanel extends BaseController{
    public function dashboard()
    {
        $data = [
            'title' => 'Dasboard page'
        ];
        return view('dashboard', $data);
    }

    public function deposits()
    {
        $data = [
            'title' => 'Deposit page'
        ];
        return view('deposits', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'History page'
        ];
        return view('history', $data);
    }

    public function reff()
    {
        $data = [
            'title' => 'Referall list'
        ];
        return view('reff', $data);
    }

    public function settings()
    {
        $data = [
            'title' => 'User setting'
        ];
        return view('settings', $data);
    }

}
