<?php

namespace App\Controllers;



class Cliente extends BaseController
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

        $cliente = $clienteService->authenticate($login, $password);
        if ($cliente['status'] === 'success') {
            // Autenticação bem-sucedida, redirecionar para a página de clientes
            dd($cliente);
        } else {
            // Autenticação falhou, redirecionar de volta para a página de login com uma mensagem de erro
            return redirect()->to('/login')->with('error', $cliente['message']);
        }

       

    }

}
