<html lang = "pt-br">

	<head>

		<title>Prod Manager</title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		 <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

		 <style>
			body{
				background-color: #A020F0;
			}
		</style>

	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

	      <div class="collapse navbar-collapse" >

	        <ul class="navbar-nav mr-auto">

	          <li class="nav-item">
	            <a class="nav-link" href="index.html">Menu Principal</a>
	          </li>

	          <li class="nav-item ">
	            <a class="nav-link" href="add_prod.html">Adicionar Produto</a>
	          </li>

	          <li class="nav-item active">
	            <a class="nav-link" href="alterar.php">Alterar Produto</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar_todas.php">Listar todos os Produtos</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar.html">Listar um Produto</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="apagar.php">Remover um Produto</a>
	          </li>

	        </ul>

	      </div>

	    </nav>

		<div id="content" class="mx-auto">

	        <form class="form-row" method="POST" action="" style="margin-bottom: 85px;">

				

		          <div class="col-sm-12">
		            <label for="nome">Nome do Produto</label>
		            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o novo nome do Produto (Irá Substituir o atual nome!)">
		          </div>

		          <div class="col-sm-12">
		            <label for="num">ID do Produto</label>
		            <input type="number" class="form-control" id="num" name="num" placeholder="Insira o ID do Produto que você deseja alterar">
		          </div>

		          <div class="col-sm-12">
		            <label for="qtd">Quantidade</label>
		            <input type="number" class="form-control  " id="qtd" name="qtd" placeholder="Insira a  quantidade do produto">
		          </div>

		          <div class="col-sm-12">
		            <label for="categoria">Categoria</label>
		            <input type="varchar" class="form-control periodo" id="categoria" name="categoria" placeholder="Insira a categoria do produto">
		          </div>

		          <div class="col-sm-12">
		            <label for="valor_prod">Valor do Produto</label>
		            <input type="number" class="form-control creditos" id="valor_prod" name="valor_prod" placeholder="Insira o valor do produto">
		          </div>

		          <div class="form-group col-md-12">
		              <button class="btn btn-primary" type="submit" name="Alterar">Alterar</button>
		          </div>

		      </form>

	    </div>

	</body>

</html>

<?php

if(isset($_POST["Alterar"])){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "prod_manager";

    $nome = $_POST['nome'];
    $id = $_POST['num'];
    $qtd = $_POST['qtd'];
    $categoria = $_POST['categoria'];
    $valor_prod = $_POST['valor_prod'];


    $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

    if(!$conn) {
        die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
    }


    $query =  "SELECT * FROM prod_manager WHERE id='$id'";

     $result = $conn->query($query);

     if ($result->num_rows > 0){
        $up = "UPDATE prod_manager SET nome = '$nome', qtd = '$qtd', categoria = '$categoria', valor_prod= '$valor_prod' WHERE id = '$id'";

        if ($conn->query($up) === TRUE) {

            echo "<script>alert('Produto alterado com sucesso'); location= 'listar_todas.php';</script>";
    
        } else {
    
            die("Erro!");
    
        }

     } 

} 

?>

