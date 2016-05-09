<?php
	function pedido_create () {
		$id_pedido = $_GET["id_pedido"];
		$id_produto = $_POST["id_produto"];
		$id_cliente = $_POST["id_cliente"];

		//insert
		if(isset($_POST['insert'])){
			global $wpdb;
			$wpdb->insert(
				'pedido',
				array('id_pedido' => $id_pedido, 'id_produto' => $id_produto, 'id_cliente' => $id_cliente)
			);
			$message.="Pedido cadastrado";
		}
?>
	<div>
		<h2>Adicionar pedido</h2>
		<?php if (isset($message)): ?>
			<div><p><?php echo $message;?></p></div>
		<?php endif;?>
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
			<table>
				<tr><th>Id pedido</th><td><input type="text" name="id_pedido" value="<?php echo $id_pedido;?>"/></td></tr>
				<tr><th>Id produto</th><td><input type="text" name="id_produto" value="<?php echo $id_produto;?>"/></td></tr>
				<tr><th>Id cliente</th><td><input type="text" name="id_cliente" value="<?php echo $id_cliente;?>"/></td></tr>
			</table>
			<input type='submit' name="insert" value='Salvar' class='button'>
		</form>
	</div>
<?php
}


