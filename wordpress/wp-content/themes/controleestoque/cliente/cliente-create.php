<?php
	function produto_create () {
		$id = $_POST["id"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];

		//insert
		if(isset($_POST['insert'])){
			global $wpdb;
			$wpdb->insert(
				'produto',
				array('id' => $id, 'nome' => $nome, 'email' => $email, 'telefone' => $telefone)
			);
			$message.="Cliente cadastrado";
		}
?>
	<div>
		<h2>Adicionar cliente</h2>
		<?php if (isset($message)): ?>
			<div><p><?php echo $message;?></p></div>
		<?php endif;?>
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
			<table>
				<tr><th>ID</th><td><input type="text" name="id" value="<?php echo $id;?>"/></td></tr>
				<tr><th>Nome cliente</th><td><input type="text" name="nome" value="<?php echo $nome;?>"/></td></tr>
				<tr><th>Email</th><td><input type="text" name="email" value="<?php echo $email;?>"/></td></tr>
				<tr><th>Telefone</th><td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td></tr>
			</table>
			<input type='submit' name="insert" value='Salvar' class='button'>
		</form>
	</div>
<?php
}

