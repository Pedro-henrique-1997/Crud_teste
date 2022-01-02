<?php include_once "conexao.php";

try{

	$nome = filter_var($_POST['nome']);
	$sobrenome = filter_var($_POST['sobrenome']);

	$inserir = $conectar->prepare("INSERT INTO tabela(nome, sobrenome) VALUES(:nome, :sobrenome)");
	$inserir->bindParam(":nome", $nome);
	$inserir->bindParam(":sobrenome", $sobrenome);
	$inserir->execute();

	header("Location:index.php");

}catch(PDOException $e){
	echo "Erro ao validar" . $e->getMessage();
}

?>