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
</style>
<body>

<div class="container">
  <h2 class="py-5 text-center">Novo Usuario </i></h2>

  <form action=".../controller/insert_cliente.php" method="post"></form>
  <div class="row g-3">
        <label for="name" class="form-label" >Nome: <i class="bi bi-envelope"></i></label>
        <input type="text" class="from-control" name ="name" required autofocus>
  </div>
  <div class="cold-md-6">
        <label for="email" class="form-label" >E-Mail: <i class="bi bi-person"></i></label>
        <input type="text" class="form-control" name ="email" required>
  </div>
  <div class="cold-md-4">
        <label for="cpf" class="form-label" >CPF: <i class="bi bi-credit-card-2-front"></i></label>
        <input type="text" class="form-control" name ="cpf" required>
  </div>
  <div class="cold-md-4">
        <label for="niver" class="form-label" >Aniversario: <i class="bi bi-calendar"></i></label>
        <input type="text" class="form-control" name ="niver" required>
  </div>
  <div class="cold-md-4">
        <label for="cell" class="form-label" >Telefone: <i class="bi bi-whatsapp"></i></label>
        <input type="text" class="form-control" name ="cell" required>
  </div>
  <div class="cold-md-12">
        <label for="endereco" class="form-label" >Endereço: <i class="bi bi-map"></i></label>
        <input type="text" class="form-control" name ="endereco" required>
  </div>


  <form action="">
        
  </form>
</div>



<script type="text/javascript" src="https//cdnjs.cloudeflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https//cdnjs.cloudeflare.com/ajax/libs/query.mask/1.14.15/query.mask.min.js"></script>
</body>
</html>