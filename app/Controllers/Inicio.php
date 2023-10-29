<?php

namespace Pizzaria\Controllers;

use Pizzaria\Models\PedidoModel;

class Inicio{
    //exibir a view inicial do sistema
    public function principal(){
        $pedidoModel = new PedidoModel();

        $pedidos = $pedidoModel->buscarTodos();


        carregar_view('inicio', 'Pedidos', ['pedidos' => $pedidos]);
        carregar_view('inicio');
    }
}

