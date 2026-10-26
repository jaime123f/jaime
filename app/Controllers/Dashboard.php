<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('autenticado') !== true) {
            return redirect()->to(site_url('login'))->with('error', 'Debes iniciar sesión para ingresar.');
        }
        return view('dashboard');
    }
}