<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "prod_manager";

  $id = $_POST['num'];

  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  $query =  "DELETE FROM prod_manager WHERE id='$id'";

  if ($conn->query($query) === TRUE) {
    echo "<script>('Disciplina removida com sucesso!'); location= 'index.html';</script>";
  } else {
    echo "Erro ao executar o comando " ;
  }

?>

<!DOCTYPE html>

  <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Atividade</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

    </head>

    </html>