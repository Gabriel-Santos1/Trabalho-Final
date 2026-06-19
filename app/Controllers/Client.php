<?php

namespace App\Controllers;

use App\Services\ClienteService;

class Client extends BaseController
{
    public function login(): string
    {
        return view('./public/login');
    }

    public function authenticate()
    {
         $clienteService = service('cliente');

        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        d($login, $password);


        $r = $clienteService->getClientes();

        foreach ($r['data'] as $cliente) {
            echo($cliente);
        }

    }

}
