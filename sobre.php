<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PDE</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
	<div class="navbar navbar-default navbar-dark navbar-fixed-top" style="margin-top: 10px">
		<div class="container-fluid ">
			<div class="navbar-header ">
				<div class="logo"><a href="#"><img src="imagens/logos.png"></a></div>
				<a href="index.php" class="navbar-brand" style="margin-left: 55px;">Programa De Desenvolvimento Espacial</a>
				<button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse navHeaderCollapse ">
			<ul class="nav navbar-nav navbar-right ">
				<li class="dropdown"><a href="sobre.php" style="font-size: 10px;"><span class="glyphicon glyphicon-globe"></span> SOBRE NÓS</a>
					<ul class="dropdown-content">
						<li><a href="#">Missao</a></li>
						<li><a href="#">Visao</a></li>
						<li><a href="#">Objectivo Geral</a></li>
					</ul>
				</li>
				<li><a href="#"  style="font-size: 10px;"><span class="glyphicon glyphicon-exclamation-sign"></span> ATENDIMENTO</a></li>
				<li><a href="#"  style="font-size: 10px;"><span class="glyphicon glyphicon-pencil"></span> PROJECTOS</a></li>
				<li><a href="#"  style="font-size: 10px;"><span class="glyphicon glyphicon-eye-open"></span> EVENTOS</a></li>
				<li><a href="#"  style="font-size: 10px;"><span class="glyphicon glyphicon-info-sign"></span> IMPRENSA</a></li>
				<li class="dropdown"><a href="contactos.php" style="font-size: 10px;"><span class="glyphicon glyphicon glyphicon-envelope"></span> CONTACTOS</a>
					<ul class="dropdown-content">
						<li><a href="#"> Mensagem</a></li>
					</ul>
				</li>
				
			</ul>
			</div>
		</div>
	</div>

	<div class="carousel slide" id="slider" data-ride="carousel">
		<ol class="carousel-indicators">
			<li class="active" data-slede-to="0" data-target="#slider"></li>
			<li data-slede-to="1" data-target="#slider"></li>
			<li data-slede-to="2" data-target="#slider"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active" id="slide1">
				<div class="carousel-caption">
					<h4>Galeria</h4>
					<p>imagens da galeria</p>
				</div>
			</div>
			
		
		<div class="item" id="slide2">
				<div class="carousel-caption">
					<h4>Galeria</h4>
					<p>imagens da galeria</p>
				</div>
			</div>
			<div class="item" id="slide3">
				<div class="carousel-caption">
					<h4>Galeria</h4>
					<p>imagens da galeria</p>
				</div>
			</div>
	</div>
	</div>
	<div class="container-fluid ">

	<div class="jumbotron" style="margin-top: 20px;">
  <center><h1>Sobre nós</h1>
  <p>  O Programa de Desenvolvimento Espacial é um programa inserido no Ministério dos Transportes e Comunicações com a finalidade de Maximizar os benefícios sócio-económicos das empresas e agregados locais baseados ao longo dos corredores e dessa forma desenvolver também a economia nacional.
  <p><a class="btn btn-primary btn-lg" href="#" role="button">ler mais</a></p>
  </center>
</div>

<div class="row">
  <div class="col-sm-2 col-md-4">
    <div class="thumbnail">
      <img src="imagens/missao.jpg" alt="...">
      <div class="caption">
        <h3>Missão</h3>
        <p>Produzir ferramentas e práticas de planificação baseadas na análise socioeconómica espacial coerente com vista a induzir o desenvolvimento integrado.</p>
        <p> <a href="#" class="btn btn-default" role="button">ler mais</a></p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="imagens/visao.jpg" alt="...">
      <div class="caption">
        <h3>Visão</h3>
        <p>Ser instrumento de apoio no desenvolvimento de economias espaciais para se alcançar o crescimento económico de forma institucional, ambiental e socialmente sustentável e benéfica.</p>
        <p> <a href="#" class="btn btn-default" role="button">ler mais</a></p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="imagens/geral.jpg" alt="...">
      <div class="caption">
        <h3>Visão Geral</h3>
        <p>Objectivo Geral:
Desenvolver e internalizar, ao nível do Governo de Moçambique (GdM), ferramentas e práticas de planificação baseadas na análise socioeconómica espacial coerente. Constitui também objectivo geral implementar a planificação das infraestruturas e dos transportes relacionados com a IDE, facilitando intervenções e projectos que apoiam o crescimento económico multissectorial diversificado.</p>
        <p> <a href="#" class="btn btn-default" role="button">ler mais</a></p>
      </div>
    </div>
  </div>


</div>
 <footer class="text-center" id="footer">&copy; 2018 Copyright </footer>
</div>

<?php 
include 'contact.php';

 ?>

</body>
</html>