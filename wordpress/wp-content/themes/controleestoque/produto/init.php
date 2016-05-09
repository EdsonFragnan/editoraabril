<?php
/*
Plugin Name: Controle de estoque
*/
//Itens do menu

add_action('menu','controle_estoque_produto_menu');
function controle_estoque_produto_menu() {
	
	add_menu_page('Produto', 
	'Produto', 
	'manage_options', 
	'produto_list', 
	produto_list 
	);
	
	add_submenu_page('produto_list', 
	'Add New Produto', 
	'Add New', 
	'manage_options', 
	'produto_create', 
	'produto_create'); 
	
	add_submenu_page(null, 
	'Update Produto', 
	'Update', 
	'manage_options', 
	'produto_update', 
	'produto_update');
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'produto-list.php');
require_once(ROOTDIR . 'produto-create.php');
require_once(ROOTDIR . 'produto-update.php');