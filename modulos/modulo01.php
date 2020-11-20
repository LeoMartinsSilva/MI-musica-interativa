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
				    	<a class="dropdown-item" href="#">Textos</a>
				    	<a class="dropdown-item" href="ativ_modulo01.php">Atividades</a>
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
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>



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
                    <h1 id="carousel-title" class="mt-3">Titulo1</h1>
                    <div class="carousel-text w-75 text-justify"> <!-- largura definida em w-50 : 50% do tamanho -->
                        <p>Texto texto mesmo texto escrito texto texto</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Titulo2</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>texto grande texto texto um texto dois textos texto texto, olha lá, um texto texto mesmo</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Titulo3</h1>
                    <div class="carousel-text w-75 text-justify" style="font-size: 15pt;">
                        <p>texto muito texto texto texo testado texto</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Titulo4</h1>
                    <div class="carousel-text w-75 text-justify" align="center">
                        <p>um texto é pouco 2 textos é bom 3 textos é demais</p>
                    </div>
                    <div class="container" style="margin-top: 50px;">
                        <div class="col-2"></div>
                        <audio controls="" class="col-4">
                            <source src="" type="">
                        </audio>
                        <audio controls="" class="col-4">
                            <source src="" type="">
                        </audio>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Titulo5</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Titulo6</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto textotexto texto texto texto texto texto texto texto texto texto texto texto texto texto texto textotexto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">titulo7</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto textotexto texto texto texto texto texto texto texto texto texto texto texto texto texto texto textotexto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
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