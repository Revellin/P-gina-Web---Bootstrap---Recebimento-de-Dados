<?php
    require_once("pessoa.php");
    $pessoa = new Pessoa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3 " crossorigin="anonymous ">
    </script>
</head>
<body>
div class="d-flex flex-column wrapper" >
    <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
              <div class="container">
                         <a class="navbar-brand text-white">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                 <a class="nav-link text-white active " href="/">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link text-white" href="/index.html">Consultar</a>
                            </li>
                        </ul>
                     </div>
                </div>
        </nav>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            </div>
        </div>
        <main class="flex-fill">
            <div class="container">
                <div class="texto">
                  <br>
                    <h3>Cadastrar - Agendamento de Potenciais Clientes</h3>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                             <thead>
                                <tr class= "col bg-primary">
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody class="table teste1">
                                <tr>
                                    <td class="teste2">
                                       <?php 
                                       $pessoa->setNome($_POST['nome']);
                                       echo $pessoa->getNome();
                                       ?> 
                                    </td>
                                    <td class="teste2">
                                       <?php 
                                       $pessoa->setTelefone($_POST['telefone']);
                                       echo $pessoa->getTelefone();
                                       ?> 
                                    </td>
                                    <td class="teste2">
                                       <?php 
                                       $pessoa->setOrigem($_POST['origem']);
                                       echo $pessoa->getOrigem();
                                       ?> 
                                    </td>
                                    <td class="teste2">
                                       <?php 
                                       $pessoa->setContato($_POST['contato']);
                                       echo $pessoa->getContato();
                                       ?> 
                                    </td>
                                    <td class="teste2">
                                       <?php 
                                       $pessoa->setObservacao($_POST['observacao']);
                                       echo $pessoa->getObservacao();
                                       ?> 
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</body>
</html>