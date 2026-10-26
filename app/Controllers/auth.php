<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('autenticado') === true) {
            return redirect()->to(site_url('dashboard'));
        }
        return view('auth/login');
    }

    public function validar()
    {
        $usuario = (string) $this->request->getPost('usuario');
        $password = (string) $this->request->getPost('password');

        $usuarioCorrecto = 'admin';
        $passwordCorrecto = '123456';

        if ($usuario === $usuarioCorrecto && $password === $passwordCorrecto) {
            $sesion = session();
            $sesion->regenerate(true);
            $sesion->set([
                'autenticado' => true,
                'usuario' => $usuario
            ]);
            return redirect()->to(site_url('dashboard'));
        } else {
            return redirect()->to(site_url('login'))->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'))->with('mensaje', 'Sesión cerrada correctamente.');
    }
}