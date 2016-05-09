<?php
function pedido_list () {
?>
<div>
	<h2>Lista de pedidos</h2>
	<a href="<?php echo admin_url('admin.php?page=pedido-create'); ?>">Adcionar pedido</a>
	<?php
	global $wpdb;
	$rows = $wpdb->get_results("SELECT id_produto, id_cliente from pedido");
	echo "<table>";
	echo "<tr><th>ID</th><th>Id produto</th><th>Id cliente</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		echo "<tr>";
		echo "<td>$row->id_produto</td>";
		echo "<td>$row->id_cliente</td>";	
		echo "<td><a href='".admin_url('admin.php?page=pedido-update&id='.$row->id_cliente)."'>Atualizar</a></td>";
		echo "</tr>";}
	echo "</table>";
	?>
</div>
<?php
}



