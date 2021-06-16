<?php
//Incluyo lel archivo

require_once('View/View.php');

//Creo la clase
class PedidoView extends View {

    public function __construct($is_secretaria, $is_logged){
        parent:: __construct($is_secretaria, $is_logged);
    }

    function showPedidos($pedidos){
        $this->smarty->assign('pedidos', $pedidos);
        $this->smarty->display('templates/listaPedidos.tpl');
    }

}