<?php
namespace App\Controllers;

class UserPanel
 extends BaseController{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function deposits()
    {
        return view('deposits');
    }

    public function history()
    {
        return view('history');
    }

    public function reff()
    {
        return view('reff');
    }

    public function settings()
    {
        return view('settings');
    }

}
