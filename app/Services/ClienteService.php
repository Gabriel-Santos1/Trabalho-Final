<?php

namespace App\Services;

use App\Models\ClienteModel;

class ClienteService
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }
    public function getClienteById($id)
    {
        return $this->clienteModel->find($id);
    }
    public function authenticate($login,$password){
        $cliente = $this->clienteModel->where('login', $login)->first();
        if ($cliente['login'] && $cliente['pass']) {
            return [
                'status' => 'success',
                'data' =>  $cliente
            ];
        }
        return [
            'status' => 'error',
            'message' => 'Credenciais inválidas.'
        ];
    }
    public function getClientes()
    {
        /*
            Retorna a lista de clientes.
        */

        try {

            $clientes = $this->clienteModel->paginate(5);
            $pager = $this->clienteModel->pager;


        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Erro ao selecionar os campos: ' . $e->getMessage()
            ];
        }

        return [
            'status' => 'success',
            'pager' => $pager,
            'data' => $clientes
        ];

    }

    public function deleteCliente($id)
    {
        try {
            if (!$this->clienteModel->find($id)) {
                return [
                    'status' => 'error',
                    'message' => 'Cliente não encontrado.'
                ]; // Cliente não encontrado
            } else {
                $this->clienteModel->delete($id);
                return [
                    'status' => 'success',
                    'message' => 'Cliente excluído com sucesso.'
                ]; // Cliente excluído com sucesso
            }
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Erro ao excluir o cliente: ' . $e->getMessage()
            ];
        }
    }

    public function createCliente($data)
    {
        try {
            $this->clienteModel->insert($data);
            return [
                'status' => 'success',
                'message' => 'Cliente criado com sucesso.'
            ]; // Cliente criado com sucesso
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Erro ao criar o cliente: ' . $e->getMessage()
            ];
        }
    }
}


