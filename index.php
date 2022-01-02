<?php include_once "conexao.php"?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Listagem</h1>

	<a href="cadastro_form.php">Cadastrar</a>

	<?php
     $consultar = $conectar->query("SELECT * from tabela");

     echo "<table class='table'>
  <thead>
    <tr>
      <th scope='col'>Nome</th>
      <th scope='col'>Sobrenome</th>
      <th scope='col'>Acoes</th>      
    </tr>
  </thead>";

  while($ver_dados = $consultar->fetch(PDO::FETCH_ASSOC)){
  	echo "<tr>
  	<td>$ver_dados[nome]</td>
  	<td>$ver_dados[sobrenome]</td>
  	<td><a href='editar_form.php?id=$ver_dados[id]'>Editar</a></td>
    <td><a href='excluir_form.php?id=$ver_dados[id]'>Excluir</a><td>
    </tr>";
  }
  

echo "</table>";

if($consultar->rowCount() > 0){
  echo "Existem " . $consultar->rowCount() . "pessoas no sistema";
	
}else{
  echo "O banco esta vazio";
}
?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>