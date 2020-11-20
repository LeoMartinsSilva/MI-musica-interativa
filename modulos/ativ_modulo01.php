<?php 
session_start();
include_once '../PHP/conexao.php';
$email = $_SESSION['email'];

// query da atividade 1
$result_atividade1="SELECT * FROM atividades WHERE idAtividade=1";
$resultado_atividade1= mysqli_query($conn, $result_atividade1);
$row_atividade1 = mysqli_fetch_assoc($resultado_atividade1);

// query da atividade 2
$result_atividade2="SELECT * FROM atividades WHERE idAtividade=2";
$resultado_atividade2= mysqli_query($conn, $result_atividade2);
$row_atividade2 = mysqli_fetch_assoc($resultado_atividade2);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Introdução</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/compiler/style.css">
    <link rel="stylesheet" type="text/css" href="modulos.css">
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <style>
        /* estilização para centralizar verticalmente */
        #div-carousel-item {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
</head>

<body>
	<div class="container mt-5">
	<div class="row">
			<div class="col-2 listaModulos bg-dark">
				<div class="dropdown show mt-3">
				 	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Introdução
				  	</a>

				  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    	<a class="dropdown-item" href="introducao.php">Textos</a>
				  </div>
				</div>
				<div class="dropdown show mt-3">
				 	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Módulo 01
				  	</a>

				  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    	<a class="dropdown-item" href="modulo01.php">Textos</a>
				    	<a class="dropdown-item" href="#">Atividades</a>
				  </div>
				</div>
				<div class="dropdown show mt-3">
				 	<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Módulo 02
				  	</a>

				  	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    	<a class="dropdown-item" href="#">Textos</a>
				    	<a class="dropdown-item" href="#">Atividades</a>
				  </div>
				</div>
			</div>





    <div id="carouselExampleIndicators" class="carousel slide col-10" data-interval= false data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>



        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- 
                    w-100 : usa todo o espaço para a largura (outros valores: w-75, w-50)
                    text-center: força centralização do texto
                    align-middle: coloc
                    background-color: o primeiro coloquei azul. 
                    - nos outros dois eu coloquei as classes bg-danger e bd-warning (outros valores aqui https://getbootstrap.com.br/docs/4.1/utilities/colors/)
                 -->
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Atividade 1</h1>
                    <div class="carousel-text w-75 text-justify"> <!-- largura definida em w-50 : 50% do tamanho -->
                        <form action="PHP/acerto.php">
                            <p><?php echo $row_atividade1['descricao'];?></p>
                            <input type="radio" id="alt1" name="alternativa" value="alt1">
                            <label for="alt1"><?php echo $row_atividade1['alt1'];?></label><br>
                            <input type="radio" id="alt2" name="alternativa" value="alt2">
                            <label for="alt2"><?php echo $row_atividade1['alt2'];?></label><br>
                            <input type="radio" id="alt3" name="alternativa" value="alt3">
                            <label for="alt3"><?php echo $row_atividade1['alt3'];?></label><br>
                            <input type="radio" id="alt4" name="alternativa" value="alt4">
                            <label for="alt4"><?php echo $row_atividade1['alt4'];?></label><br>
                            <input type="submit" value="Responder">
                        </form>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Atividade 2</h1>
                    <div class="carousel-text w-75 text-justify">
                        <form>
                            <p><?php echo $row_atividade2['descricao'];?></p>
                            <input type="radio" id="alt1" name="alternativa" value="alt1">
                            <label for="alt1"><?php echo $row_atividade2['alt1'];?></label><br>
                            <input type="radio" id="alt2" name="alternativa" value="alt2">
                            <label for="alt2"><?php echo $row_atividade2['alt2'];?></label><br>
                            <input type="radio" id="alt3" name="alternativa" value="alt3">
                            <label for="alt3"><?php echo $row_atividade2['alt3'];?></label><br>
                            <input type="radio" id="alt4" name="alternativa" value="alt4">
                            <label for="alt4"><?php echo $row_atividade2['alt4'];?></label><br>
                            <input type="submit" value="Responder">
                        </form>
                    </div>
                </div>
            </div>         
                               
            

            <!-- botões de ir e voltar -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
	</div>
	</div>
</body>

</html>