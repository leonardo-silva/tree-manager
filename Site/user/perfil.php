<?php
include('seguranca.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/perfil.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title> Perfil de Usuário </title>

</head>

<body>
	
<?php  include('statusSession.php');   ?>
		
	<div class="menu">
		<div class="top-total">
            <!-- div top-total. DIV para todo o topo do site
            -->

            <div class="title">
            	<h1> Perfil de Usuário </h1>
            </div>
            <nav class="navbar navbar-expand-lg ">
            	<!-- Toggler/collapsibe Button -->
            	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            		<a class="navbar-brand" href="#">
            			<img src="../img/menu.png" alt="Menu">						
            			<a  class="navbar-brand" href="#" > <b>Menu</b>  </a>
            		</a>
            	</button>
            	<div class="collapse navbar-collapse justify-content-center hovermouse " id="collapsibleNavbar">
            		<ul class="nav nav-pills navbar-nav">
            			<li class="nav-item">

            				<a class="nav-link ap" href="perfil.php"> <img src="../img/perfil.png" height="30px" width="30px"> Perfil</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link opc" href="gerenciamento_arvores.php"> <img src="../img/gerenciamento_informacoes.png" height="30px" width="30px">Gerenciamento de árvores</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link opc" href="cadastro_arvores.php"> <img src="../img/add.png" height="30px" width="30px">Cadastro de árvores</a>
            			</li>

            		</ul>
            	</div>
            </div>
        </nav>
    </div>
    <div class="conteudo col-md-6 col-sm-3 rounded border border-secondary ">

    	<div class="foto">
    		<img src="../img/foto-perfil.png" height="120px" width="120px">
    	</div>
    	<form>
    		<div class="info" width="50%" height="80%">
    			<div class="dado"> <input type="text" class="input rounded border border-secondary" id="#" placeholder="Nome" name="Nome" disabled="disabled"></input><button type="button" class="btn btn-success spc" name="AltName">Alterar nome</button></div>
    			<div class="dado"><input type="text" class="input rounded border border-secondary" id="#" name="Nome" placeholder="Email" disabled="disabled"></input> <button type="button" class="btn btn-success spc1" name="Altemail">Alterar E-mail</button></div>
    			<div class="dado"><input type="number" class="input rounded border border-secondary" id="#" name="num" placeholder="Telefone" disabled="disabled"></input><button type="button" class="btn btn-success spc" name="AltTel">Alterar telefone</button> <button type="button"
    				class="btn btn-success spc" name="AddTell"> Adicionar Telefone</button> </div>
    				<button type="button" class="btn btn-success conf" name="confirm">Confirmar</button>
    			</div>
    		</form>
    	</div>
    </div>
    <div class="rodape fixed-bottom text-center">
    	<h2> Rodapé da pagina </h2>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>