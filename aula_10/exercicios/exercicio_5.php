<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $cor_background = $_POST["background_color"];

    ?>
    <div class="container " style='background-color: <?php echo $cor_background?>; '>

    <h2>
        Selecione a cor desejada para o fundo de tela! v
    </h2>
    <form action="exercicio_5.php" method="post">
        <input class="form-control w-25" type="color" name="background_color" id="background_color">
        <button class="form-control btn btn-primary  m-2" type="submit" >Muda cor</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>