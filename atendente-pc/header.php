<!DOCTYPE HTML>
<html>
<head>
	<title>HOME</title>	
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/novo_estilo.css">
	<style>
		

	.clock {
	    color: black;
	    font-size: 20px;
	    font-family: Orbitron;
	    letter-spacing: 2px;
	}

	</style>

</head>
<body style="background-color: #1F3E0F">
	<header>
		<div class="container">
			<img src="img/logo.png" title="logo" alt="logo">
			<div id="menu">
				<a href="?pagina=cardapio">CARDÁPIO</a>
				<a href="?pagina=menu">MENU</a>
				<?php if(isset($_SESSION['login'])) { ?>
					<a href="logout.php"><?php echo 'SAIR' ?></a>
				<?php } ?>
			</div>
			<div id="MyClockDisplay" onload="showTime()" style="color: white;font-family: Orbitron;font-size: 20px;margin-left: 15px;margin-top: 10px">
				<script type="text/javascript" src="js/clock.js">
				</script><br>
			</div>
			<div style="color: white;font-family: Orbitron;font-size: 20px;margin-left: 18px">
				<label><?php echo date('d/m/Y')?></label>
			</div>
			<?php if(isset($_SESSION['login'])) { ?>
				<div style="color: white;font-family: Orbitron;font-size: 20px;margin-left: 9px" >
					<label>Func:<?php echo $_SESSION['usuario'] ?></label>
				</div>
			<?php } ?>
			
		</div>
	</header>
	<div id="conteudo" class="container">
		
