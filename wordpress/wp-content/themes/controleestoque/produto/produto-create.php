<?php
	function produto_create () {
		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];

		//insert
		if(isset($_POST['insert'])){
			global $wpdb;
			$wpdb->insert(
				'produto',
				array('id' => $id, 'nome' => $nome, 'descricao' => $descricao, 'preco' => $preco)
			);
			$message.="Produto cadastrado";
		}
?>
	<div>
		<h2>Adicionar produto</h2>
		<?php if (isset($message)): ?>
			<div><p><?php echo $message;?></p></div>
		<?php endif;?>
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
			<table>
				<tr><th>ID</th><td><input type="text" name="id" value="<?php echo $id;?>"/></td></tr>
				<tr><th>Nome produto</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
				<tr><th>Descrição</th><td><input type="text" name="descricao" value="<?php echo $descricao;?>"/></td></tr>
				<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
			</table>
			<input type='submit' name="insert" value='Salvar' class='button'>
		</form>
	</div>
<?php
}


