<?php
session_start(); // Iniciando a Sessão

if (!isset($_POST['butaoLogin'])) {
	header("Location: loginUsuario.php?urlNot");
}

// Conectando com o banco (veja o arquivo bd_conexao.php)
// Agora existe o obj $con conectado com o BD
require_once('../00 - BD/bd_conexao.php');

// Pegando as informações do formulário.
$email  = $_POST['email_login'];
$senha  = $_POST['senha_login'];
//**TENHO QUE RECEBER O OPAÇAO DE MARTER-ME LOGADO 

// Criando a minha string com o código SQL de consulta
$sql = "
SELECT *
FROM usuario
WHERE Email = '$email' AND Senha = '$senha'
";

// Mando a SQL para o banco através do método query da 
//    classe de conexão mysqli() expressa pelo obj $con
$resultado = $con->query($sql) or die("Erro ao conectar com o Banco");

// Fechando a conexção
fecharConexao($con);

// Transformando a estrutura do $resultado em um obj.
//    com as informações dos campos da tabela no BD.
$infoUsuario = mysqli_fetch_object($resultado);

if (empty($infoUsuario)) {
	header("Location: loginUsuario.php?error_login");
} else {
	// Adicionando uma informação à sessão

	$_SESSION['validarSessao'] = $infoUsuario->Nome;
	$_SESSION['IdUsu'] = $infoUsuario->IdUsu;

	header("Location: perfil.php");
}
