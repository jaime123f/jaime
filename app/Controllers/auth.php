<?php

namespace App\Controllers;

class Auth extends BaseController
{
    // Mostrar formulario de inicio de sesión
    public function login()
    {
        if (session()->get('autenticado') === true) {
            return redirect()->to(site_url('dashboard'));
        }

        return view('auth/login');
    }

    // Validar usuario y contraseña
    public function validar()
    {
        $usuario = (string) $this->request->getPost('usuario');
        $password = (string) $this->request->getPost('password');

        // Datos de acceso
        $usuarioCorrecto = 'admin';
        $usuarioCorrecto = 'jaime';
        $passwordCorrecto = '123456';

        // Comprobar los datos
        if ($usuario === $usuarioCorrecto && $password === $passwordCorrecto) {

            $sesion = session();

            // Regenerar la sesión por seguridad
            $sesion->regenerate(true);

            // Guardar datos de sesión
            $sesion->set([
                'autenticado' => true,
                'usuario' => $usuario
            ]);

            // Ir al panel principal
            return redirect()->to(site_url('dashboard'));

        } else {

            // Regresar al login si los datos son incorrectos
            return redirect()->to(site_url('login'))
                ->with('error', 'Usuario o contraseña incorrectos.');
        }
    }

    // Cerrar sesión
    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'))
            ->with('mensaje', 'Sesión cerrada correctamente.');
    }
}
