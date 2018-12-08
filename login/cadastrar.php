<?php
include("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="css/cad.css">
</head>
<body>
	<header class='speaker-form-header'>
      <h1>Cadastro</h1>
      <p><em>Preencha seus dados e comece a passear conosco.
</em></p>

     </header>

	 <div class="box">
  <div class="outter-part">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner-part">
      <div class="gif-part">  <form class="speaker-form" method="POST" action="processa.php">
     <div class="form-row">
     <label for='full-name'>Nome Completo</label>
	<input type="text"  name="nome"placeholder="Digite o seu nome completo! ">
	</div>
	<div class="form-row">
	<label for='email'>E-mail</label>
	<input type="email"  name="email" placeholder="Digite o seu e-mail!">
	</div>
	<div class="form-row1">
		<label for='usuario'>Usuário</label>
	<input type="usuario" name="usuario" placeholder="Digite seu usuario!">
	</div>
	<div class="form-row1">
	<label for='full-phone'>Telefone</label>
	<input type="text"  name="telefone" placeholder="Telefone">
	</div>
	<div class="form-row2">
	<label for='date'>Data nascimento</label>
	<input type="date" name="datanascimento">
	</div>

	
	<div class="form-row2">
		<label for='senha'>Senha</label>
	<input type="password" name="senha" placeholder="Digite sua senha!">
	</div>
	<div class="form-row3">
		<label for='csenha'>Confirme</label>
	<input type="password" name="csenha" placeholder="Confirmar senha!">
	</div>

	<input class="button" type="submit" value="CADASTRAR">
</form></div>
    </div>
    <div class="part-1"></div>
    <div class="part-2"></div>
  </div>
</div>
</div>
</body>
</html>