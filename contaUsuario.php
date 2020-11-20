<?php 
session_start();
include_once 'PHP/conexao.php';
$email = $_SESSION['email'];


$result_usuario="SELECT * FROM alunos WHERE email='$email'";
$resultado_usuario= mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
$contaLetras = strlen($row_usuario['senha']);
?>

<html>
    <head>
        <title>Minha Conta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	   <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/style.css">
	   <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
	   <link rel="stylesheet" type="text/css" href="CSS/formulario.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiler/bootstrap.css">
    </head>
    <body>
        <!-- cabeçalho -->
	<header id="cabecalho">
            
                <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
                   <div class="container">
                    <a class="navbar-brand h1 mb-0" href="#">MI</a>
                    
                    <!-- Area de navegação do cabeçalho -->
                    <div class="container col-8 align-content-center">
                    <div class="collapse navbar-collapse container-fluid" id="navbarSite">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="modulos.php">Módulos</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Editor de Partituras</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Ajuda</a>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="#">Contate-nos</a>
                            </li>
                            <li>
                                <a class="nav-link" href="contaUsuario.php">Minha Conta</a>
                            </li>
                        </ul>
                        
                    </div>
                    </div>
                    <a class="form-inline btn btn-danger" href="PHP/sair.php">Sair</a>
                </nav>
                
            </div>
	</header>
        <div class="container-fluid mt-3">
            <div class="container col-lg-10 col-12 align-content-center bg-secondary rounded box1">
                <div class="mb-5">
                    <h1 class="text-white text-center">Informações do usuário:</h1>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-3 col-0 foto">
                        <p class="text-white my-0 text-center">Foto de Perfil:</p>
                        <div class="bg-white rounded" style="height: 200px">
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-9 mt-3">
                        <div class="row row1">
                            <p class="text-white col-lg-3 d-flex justify-content-end">Nome: </p><p class="text-white col-lg-9"><?php echo $row_usuario['nome'];?></p><br>
                        </div>
                        <div class="row row2">
                            <p class="text-white col-lg-3 d-flex justify-content-end">Nome de Usuário:</p><p class="text-white col-lg-9"> <?php echo $row_usuario['nomedeusuario'];?></p><br>
                        </div>
                        <div class="row row3">
                            <p class="text-white col-lg-3 d-flex justify-content-end">Email:</p><p class="text-white col-lg-9"><?php echo $row_usuario['email'];?></p><br>
                        </div>
                        <div class="row row4">
                            <p class="text-white col-lg-3 d-flex justify-content-end">senha:</p><p class="text-white col-lg-9"> <?php echo str_repeat('*', $contaLetras);?></p><br>
                        </div>
                        <div class="row botao1">
                            <div class="pb-4 col-lg-3 d-flex justify-content-end">
                                <a href="alteracao.php" class="btn btn-success mt-2">alterar</a>
                            </div>
                            <div class="col-lg-3">
                                <button data-toggle="modal" data-target="#modalDeletar" class='btn btn-danger mt-2 text-white'>deletar conta</button>
                                <!--modal-->
                                <div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                          <h5 class="modal-title" id="tituloModalDeletar">Deletar Conta</h5>
                                          <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Tem certeza que deseja deleta a conta?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mr-3 col-2" data-dismiss="modal">Não</button>
                                          <?php
                                            echo "<a class='btn btn-danger col-2' href='PHP/deletar.php?id=" . $row_usuario['id'] ."'>Sim</a>";
                                          ?>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>
   
                
            <!-- Mensagem de erro/exito -->
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            </div>
        </div>
        
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        
        <!-- animação de entrada dos textos -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#conteudo').css('height','650px');
                $('.box1').css('height', '360px');
                $('.box1').hide().delay('400').fadeIn("slow");
                $('.foto').hide().delay('600').fadeIn("slow");
                $('.row1').hide().delay('700').fadeIn("slow");
                $('.row2').hide().delay('800').fadeIn("slow");
                $('.row3').hide().delay('900').fadeIn("slow");
                $('.row4').hide().delay('1000').fadeIn("slow");
                $('.botao1').hide().delay('1200').fadeIn("slow");
            });
        </script>
    </body>   
    
</html>

