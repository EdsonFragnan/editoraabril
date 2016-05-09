<?php
/*
Plugin Name: Controle de estoque
*/
//Itens do menu
add_action('menu','controle_estoque_cliente_menu');
function controle_estoque_cliente_menu() {
	
	add_menu_page('Cliente', 
	'Cliente', 
	'manage_options', 
	'cliente_list', 
	cliente_list 
	);
	
	add_submenu_page('cliente_list', 
	'Add New Cliente', 
	'Add New', 
	'manage_options', 
	'cliente_create', 
	'cliente_create'); 
	
	add_submenu_page(null, 
	'Update Cliente', 
	'Update', 
	'manage_options', 
	'cliente_update', 
	'cliente_update');
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'cliente-list.php');
require_once(ROOTDIR . 'cliente-create.php');
require_once(ROOTDIR . 'cliente-update.php');