<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="container" style="text-align: center;">
	<label style="font-size: 25px">SOBREMESAS</label>
</div>
<table id="tabela_pizza" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>PRODUTO</th>
		<th>PRECO</th>
	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_produto_sobremesa)){ ?>
				<tr><td><a href="?pagina=add_sobremesa&id_sobremesa=<?php echo $linha['id_sobremesa']; ?>"><?php echo $linha['nome_sobremesa']; ?></a></td>
				<?php
				echo '<td>'.$linha['preco_sobremesa'].'</td>';
				}
	?>
	</tbody>
</table>
<div style="text-align: center;">
	<a href="?pagina=cardapio">
		<button type="button" style="margin:20px;color: white;background-color: blue; font-size: 15px">PIZZAS</button>
	</a>
	<a href="?pagina=cardapio_bebida">
		<button type="button" style="margin:20px;color: white;background-color: orange; font-size: 15px">BEBIDAS</button>
	</a>
</div>
