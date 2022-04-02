<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- referencia a Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Concessionária</title>
  </head>
  
  <body>
    
    <?= $this->element('nav');?> <!-- Acesso a element/nav - botões de navegação -->

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Teste Prático G2i</h1>
        <p class="lead">Programa realizado po Gustavo da Conceição Coutinho.</p>
      </div>
    </div>
    
    <?= $this->fetch('content');?> <!-- Usado para buscar os conteudos - home.php -->
    <?= $this->element('footer');?>  <!-- Acesso a element/footer -->
  </body>
</html>