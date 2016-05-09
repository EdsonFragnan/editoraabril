<?php
function produto_update () {
global $wpdb;
$id = $_GET["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'produto', //table
		array('id' => $id), 
		array('nome' => $nome), 
		array('descricao' => $descricao), 
		array('preco' => $preco)
	);	
}

else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM produto WHERE id = %p",$id));
}
else{
	$produtos = $wpdb->get_results($wpdb->prepare("SELECT id,nome from produto where id=%p",$id));
	foreach ($produtos as $p ){
		$nome=$p->nome;
	}
}
?>

<div>
<h2>Produtos</h2>

<?php if($_POST['delete']){?>
<div><p>Deletar</p></div>
<a href="<?php echo admin_url('admin.php?page=produto_list')?>">&laquo; Voltar para lista de produtos</a>

<?php } else if($_POST['update']) {?>
<div><p>Atualizar produto</p></div>
<a href="<?php echo admin_url('admin.php?page=produto_list')?>">&laquo; Voltar para lista de produtos</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table>
	<tr><th>Nome produto</th><td><input type="text" name="name" value="<?php echo $nome;?>"/></td></tr>
	<tr><th>Descrição</th><td><input type="text" name="descricao" value="<?php echo $descricao;?>"/></td></tr>
	<tr><th>Preço</th><td><input type="text" name="preco" value="<?php echo $preco;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Salvar' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Deletar' class='button' onclick="return confirm('Tem certeza?')">
</form>
<?php }?>

</div>
<?php
}
