<?php
function cliente_list () {
?>
<div>
	<h2>Lista de clientes</h2>
	<a href="<?php echo admin_url('admin.php?page=cliente-create'); ?>">Adicionar novo cliente</a>
	<?php
	global $wpdb;
	$rows = $wpdb->get_results("SELECT id,nome,email,telefone from cliente");
	echo "<table>";
	echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		echo "<tr>";
		echo "<td>$row->id</td>";
		echo "<td>$row->nome</td>";	
		echo "<td>$row->email</td>";
		echo "<td>$row->telefone</td>";	
		echo "<td><a href='".admin_url('admin.php?page=cliente-update&id='.$row->id)."'>Atualizar</a></td>";
		echo "</tr>";}
	echo "</table>";
	?>
</div>
<?php
}


