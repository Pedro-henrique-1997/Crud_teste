<?php include_once "conexao.php";
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$dados = $conectar->query("SELECT * FROM tabela WHERE id = '$id' ");
$dados_editar = $dados->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>

	<form method="post" action="edit.php">

		<input type="text" name="nome" placeholder="nome" value="<?php echo $dados_editar['nome']?>">

		<input type="text" name="sobrenome" placeholder="sobrenome" value="<?php echo $dados_editar['sobrenome']?>">

		<input type="hidden" name="id" value="<?php echo $dados_editar['id']?>">

		<button>Cadastrar</button>
		
	</form>

</body>
</html>