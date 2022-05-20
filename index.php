<?php
header("Content-type:text/html; charset=utf8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mvc Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

</head>
<style type ="text/css">
 body{
     margin: 20px;
     background-color: #ffffff;
 }
 *{
     font-family: 'Open Sans', sans-serif;
     
 }
 h2 {
     font-family:'Open Sans', sans-serif;
 }

 .thead{
     background-color: #f7f7f7;
 }
 .btn-cadastrar{
     float: right;
 }
</style>
<body>

<div class="container">
    <h2 class="text-center">Lista de Clientes <i class="bi-bi-people-fill"></i></h2>
    <form action="page_register.php">
    <button type="submit" class="btn-cadastrar">
        <i class="bi bi-box-arrow-in-right"></i>
    </button>
    </form>

    <h5 class="text-end">
        <a href="view/page_register.php" class="bt btn-primary btn-xs">
            <i class="bi bi-person--plus-fill"></i>
        </a>
    </h5>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>CPF</th>
                    <th>Dt. de nascimento</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                    <th colspan="3">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>João Pedro</td>
                    <td>Joazitos@aluno.com.br</td>
                    <td>555.444.333.22</td>
                    <td>02/03/2004</td>
                    <td>Rua São tome das letras</td>
                    <td>(31) 93375-5892</td>
                    <td>
                        <form method="post">
                            <button class="btn btn-waring btn-xs">
                                <i class="bi bi-pencil-square">editar</i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="post" onclick="return confirm('Tem certeza que deseja excluir?')">
                        <button class="btn btn-danger btn-xs">
                            <i class="bi bi-trash">excluir</i>
                        </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>




<script type="text/javascript" src="https//cdnjs.cloudeflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https//cdnjs.cloudeflare.com/ajax/libs/query.mask/1.14.15/query.mask.min.js"></script>
</body>
</html>