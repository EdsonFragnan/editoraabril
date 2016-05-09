<?php
/*
Plugin Name: Controle de estoque
*/
//Itens do menu

add_action('menu','controle_estoque_pedido_menu');
function controle_estoque_pedido_menu() {
	
	add_menu_page('Pedido', 
	'Pedido', 
	'manage_options', 
	'pedido_list', 
	pedido_list 
	);
	
	add_submenu_page('pedido_list', 
	'Add New Pedido', 
	'Add New', 
	'manage_options', 
	'pedido_create', 
	'pedido_create'); 
	
	add_submenu_page(null, 
	'Update Pedido', 
	'Update', 
	'manage_options', 
	'pedido_update', 
	'pedido_update');
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'pedido-list.php');
require_once(ROOTDIR . 'pedido-create.php');
require_once(ROOTDIR . 'pedido-update.php');