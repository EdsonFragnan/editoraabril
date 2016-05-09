<?php
function pedido_update () {
global $wpdb;
$id_pedido = $_GET["id_pedido"];
$id_produto = $_GET["id_produto"];
$id_cliente = $_GET["id_cliente"];

//update
if(isset($_POST['update'])){	
	$wpdb->update(
		'produto', //table
		array('id_pedido' => $id_pedido), 
		array('id_produto' => $id_produto), 
		array('id_cliente' => $id_cliente)
	);	
}

else if(isset($_POST['delete'])){	
	$wpdb->query($wpdb->prepare("DELETE FROM pedido WHERE id = %p",$id_pedido));
}
else{
	$pedidos = $wpdb->get_results($wpdb->prepare("SELECT id_pedido, id_produto, id_cliente from pedido where id_pedido=%p",$id_pedido));
	foreach ($produtos as $p ){
		$id_pedido=$p->id_pedido;
	}
}
?>

<div>
<h2>Pedidos</h2>

<?php if($_POST['delete']){?>
<div><p>Deletar</p></div>
<a href="<?php echo admin_url('admin.php?page=pedido_list')?>">&laquo; Voltar para lista de pedidos</a>

<?php } else if($_POST['update']) {?>
<div><p>Atualizar pedido</p></div>
<a href="<?php echo admin_url('admin.php?page=pedido_list')?>">&laquo; Voltar para lista de pedidos</a>

<?php } else {?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table>
	<tr><th>Id produto</th><td><input type="text" name="id_produto" value="<?php echo $id_produto;?>"/></td></tr>
	<tr><th>Id cliente</th><td><input type="text" name="id_cliente" value="<?php echo $id_cliente;?>"/></td></tr>
</table>
<input type='submit' name="update" value='Salvar' class='button'> &nbsp;&nbsp;
<input type='submit' name="delete" value='Deletar' class='button' onclick="return confirm('Tem certeza?')">
</form>
<?php }?>

</div>
<?php
}
