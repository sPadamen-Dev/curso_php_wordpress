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
        $diretorio_destino = "/opt/lampp/temp/";

        $destino_final = $diretorio_destino . basename($_FILES["arquivo"]["name"]);
        $res = move_uploaded_file($_FILES["arquivo"]["tmp_name"], $destino_final);
        var_dump($destino_final);

    ?>


        <div class="container">
        <form action="exercicio_6.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="form_img" class="form-label">Escolha sua imagem</label>
                <input name="arquivo" class="form-control form-control-lg" id="form_img" type="file">
                </div>
                <button class="form-control btn btn-success mt-2 p-2" type="submit">Enviar</button>
            </form>
            <h3>
                A rota para acessa a imagem e <br/>
                <?php echo $destino_final ?>
            </h3>
            <img src="./<?php echo $_FILES['arquivo']['name']; ?>">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>