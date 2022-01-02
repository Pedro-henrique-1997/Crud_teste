
<?php include_once "conexao.php";

try{
    
	$nome = filter_var($_POST['nome']);
	$sobrenome = filter_var($_POST['sobrenome']);
	$id = filter_var($_POST['id']);


	$update = $conectar->prepare("UPDATE tabela SET nome = :nome, sobrenome = :sobrenome WHERE id = :id");
	$update->bindParam(":nome", $nome);
	$update->bindParam(":sobrenome", $sobrenome);
	$update->bindParam(":id", $id);

	$update->execute();

	header("Location:index.php");

}catch(PDOException $e){
	echo "Erro ao validar" . $e->getMessage();
}

?>