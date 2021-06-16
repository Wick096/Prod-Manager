<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "prod_manager";
  //$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
  $nome = $_POST['nome'];
  $id = $_POST['num'];
  $qtd = $_POST['qtd'];
  $categoria = $_POST['categoria'];
  $valor_prod = $_POST['valor_prod'];


  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO prod_manager (nome, id, qtd, categoria, valor_prod) VALUES ('$nome', '$id', '$qtd', '$categoria', '$valor_prod')";

  if(!$conn->query($query)) {
  	echo "erro!";
  } else {
    echo "<script>alert('Cadastro realizado com sucesso'); location= 'add_prod.html';</script>";
  }



?>