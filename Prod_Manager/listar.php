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

  

  $query =  "SELECT * FROM prod_manager WHERE id='$id'";

  $result = $conn->query($query);

?>
<!DOCTYPE html>

  <html lang="en">

    <head>
    <title>Prod Manager</title>

      <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

      

     

    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="collapse navbar-collapse">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.html">Menu Principal</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="add_prod.html">Criar Disciplina</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="alterar.php">Alterar Disciplina</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="listar_todas.php">Listar todas as Disciplinas</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="listar.html">Listar uma Disciplina</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="apagar.html">Remover Disciplina</a>
          </li>

        </ul>

      </div>

      </nav>

      <table class='table' border=1 >

        <tr>
          <th> Nome do Produto </th>
          <th> ID do Produto</th>
          <th> Quantidade </th>
          <th> Categoria </th>
          <th> Valor do Produto </th>
        </tr>

       <?php



          $linha = $result->fetch_assoc(); 
            
          {
            echo "<tr> <td >" . $linha["nome"] . "</td>" .
                    "<td>" . $linha["id"] . "</td>" .
                    "<td>" . $linha["qtd"] . "</td>" .
                    "<td>" . $linha["categoria"] . "</td>" .
                    "<td>" . $linha["valor_prod"] . "</td>" .

                    "</tr>";
          }
      ?>

      </table>

    </body>


</html>