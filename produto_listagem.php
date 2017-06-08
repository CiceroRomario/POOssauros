<!DOCTYPE html>
<html lan="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema de Gerenciamento | Estoque</title>
</head>


<body>
<div id="interface">

	<h1>Produtos Disponíveis</h1>

	<!-- Tabela que lista produtos cadastrados no sistema -->
	<table>
		<tr>
			<th>Produto</th>
			<th>Categoria</th>
			<th>Tipo</th>
			<th>Custo</th>
			<th>Preço</th>
			<th>Quantidade</th>
			<th>Ação</th>
		</tr>
		<!-- Busca todos produtos cadastrados no banco-->
		<?php  
			$produtoDao = new ProdutoDAO();
			$lista = $produtoDao->listar();
		?>
			<tr>
				<td><?php echo $produto->nome; ?></td>
				<td><?php echo $produto->categoria; ?></td>
				<td><?php echo $produto->tipo; ?></td>
				<td><?php echo $produto->custo; ?></td>
				<td><?php echo $produto->preco; ?></td>
				<td><?php echo $produto->quantidade; ?></td>
				<!-- Imprime links (opções) na última coluna para editar ou excluir usuário -->
				<td>
					<a href="produto_editar.php?idproduto=<?php echo $produto->idproduto; ?>">Editar</a>
					&nbsp;&nbsp;
					<a href="produto_excluir.php?idproduto=<?php echo $produto->idproduto; ?>">Excluir</a>
				</td>
			</tr>
		
	</table>

	<br/><br/><br/><a href="console.php">Voltar</a>

</div>
</body>

</html>