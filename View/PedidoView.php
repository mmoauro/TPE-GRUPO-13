<?php
//Incluyo lel archivo
require_once('./libs/smarty/Smarty.class.php');

//Creo la clase
class PedidoView {

    public function __construct(){
        
    }

    function showPedidos($pedidos, $is_logged){
        $smarty = new Smarty();
        $smarty->assign('pedidos', $pedidos);
        $smarty->assign('is_logged', $is_logged);
        $smarty->display('templates/listaPedidos.tpl');
    }

}