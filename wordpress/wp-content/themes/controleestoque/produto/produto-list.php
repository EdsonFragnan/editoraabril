<?php
function produto_list () {
?>
<div>
	<h2>Lista de produtos</h2>
	<a href="<?php echo admin_url('admin.php?page=produto-create'); ?>">Adcionar novo produto</a>
	<?php
	global $wpdb;
	$rows = $wpdb->get_results("SELECT id,nome, descricao, preco from produto");
	echo "<table>";
	echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>&nbsp;</th></tr>";
	foreach ($rows as $row ){
		echo "<tr>";
		echo "<td>$row->id</td>";
		echo "<td>$row->nome</td>";	
		echo "<td>$row->descricao</td>";
		echo "<td>$row->preco</td>";	
		echo "<td><a href='".admin_url('admin.php?page=produto-update&id='.$row->id)."'>Atualizar</a></td>";
		echo "</tr>";}
	echo "</table>";
	?>
</div>
<?php
}


