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
                    <h1 id="carousel-title" class="mt-3">Introdução à música</h1>
                    <div class="carousel-text w-75 text-justify"> <!-- largura definida em w-50 : 50% do tamanho -->
                        <p>Nosso mundo é povoado de sons... E cada som possui caracteristicas próprias. Os sons podem ser músicais ou não.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Introdução à Música</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>as músicas são feitas de som e silencio buscando um sentido musical. <br> Todas as sociedades humanas produziram e produzem músicas... organizaram e organizam sons e silencios buscando um sentido musical.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Introdução à Música</h1>
                    <div class="carousel-text w-75 text-justify" style="font-size: 15pt;">
                        <p>Para aprender a teoria músical, primeiramente, é necessário aprender as caracteristicas básicas do som, são elas: duração, intensidade, altura e timbre</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">Duração</h1>
                    <div class="carousel-text w-75 text-justify" align="center">
                        <p>A duração é uma característica do som. Ela indica o tempo que o som e até o silêncio devem ter. Na escrita musical a duração é indicada pelas figuras de som e silêncio</p>
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
                    <h1 id="carousel-title" class="mt-3">intensidade</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>A intensidade é a caracteristica do som que mede a quantidade de energia que as ondas sonoras transferem em uma determinada area</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">altura</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>a altura é uma caracteristica do som que muitas vezes é confundida com as intensidade, mas na verdade a altura é o termo utilizado para definir se um som é agudo ou grave... Um som baixo é um som grave e um som alto é um som agudo</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="div-carousel-item" class="w-100 text-center" style="height: 400px; background-color: #DFBC64;">
                    <h1 id="carousel-title" class="mt-3">timbre</h1>
                    <div class="carousel-text w-75 text-justify">
                        <p>O timbre é definido pelo formato de onda, cada instrumento tem seu próprio timbre. Por exemplo, o Dó de um violão e um Dó de um teclado tem a mesma altura porém, timbres diferentes</p>
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