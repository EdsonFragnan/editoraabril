<?php
function produto_update () {
global $wpdb;
$id = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'produto', //table
		array('id' => $id), 
		array('nome' => $nome), 
		array('email' => $email), 
		array('telefone' => $telefone)
	);	
}

else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM cliente WHERE id = %c",$id));
}
else{
	$clientes = $wpdb->get_results($wpdb->prepare("SELECT id,nome,email,telefone from cliente where id=%c",$id));
	foreach ($clientes as $c ){
		$nome=$c->nome;
	}
}
?>

<div>
<h2>Clientes</h2>

<?php if($_POST['delete']){?>
<div><p>Deletar</p></div>
<a href="<?php echo admin_url('admin.php?page=cliente_list')?>">&laquo; Voltar para lista de clientes</a>

<?php } else if($_POST['update']) {?>
<div><p>Atualizar produto</p></div>
<a href="<?php echo admin_url('admin.php?page=cliente_list')?>">&laquo; Voltar para lista de clientes</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table>
	<tr><th>Nome cliente</th><td><input type="text" name="name" value="<?php echo $nome;?>"/></td></tr>
	<tr><th>Email</th><td><input type="text" name="email" value="<?php echo $email;?>"/></td></tr>
	<tr><th>Telefone</th><td><input type="text" name="telefone" value="<?php echo $telefone;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Salvar' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Deletar' class='button' onclick="return confirm('Tem certeza?')">
</form>
<?php }?>

</div>
<?php
}
