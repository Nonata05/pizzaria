<?php

namespace Pizzaria\Controllers;

use Pizzaria\Models\ClienteModel;
use Pizzaria\Models\PedidoModel;
use Pizzaria\Models\ProdutoModel;

class Pedido
{

    public function principal()
    {
    }

    public function novoPedido(){
        $clienteModel = new ClienteModel();
        $produtoModel = new ProdutoModel();

        $clientes = $clienteModel->buscarTodos();
        $produtos = $produtoModel->buscarTodos();

       $dados = [
        'produtos' => $produtos,
        'clientes' => $clientes
       ];
        
        carregar_view('novo_pedido', 'Novo pedido', $dados);
    }



    public function excluir()
    {
        $idPedido = $_GET['id'];

        $pedidoModel = new PedidoModel();

        $resultado = $pedidoModel->deletar($idPedido);

        if ($resultado) {
            $dadosAlerta = [
                'mensagem' => 'Pedido Excluido com sucesso',
                'url' => url_base()
            ];

            carregar_view('alerta', 'Sucesso', $dadosAlerta);
        } else {
            if ($resultado) {
                $dadosAlerta = [
                    'mensagem' => 'Erro ao excluido pedido',
                    'url' => url_base()
                ];

                carregar_view('alerta', 'Sucesso', $dadosAlerta);
            }
        }
    }
}
