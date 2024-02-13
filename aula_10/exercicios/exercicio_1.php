<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Media Arimetica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <?php
        $nome_do_aluno = $_GET["nome"];
        $primeira_nota = $_GET["nota_1"];
        $segunda_nota = $_GET["nota_2"];
        $terceira_nota = $_GET["nota_3"];
        
        $resultado_da_media = ($primeira_nota + $segunda_nota + $terceira_nota) / 3;
    ?>


  
    <form class="">
        <div class="mb-3">
            <label  class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nota 1</label>
            <input type="number" name="nota_1" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nota 2</label>
            <input type="number" name="nota_2" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nota 3</label>
            <input type="number" name="nota_3" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <h2>
        <?php echo "Sua media ".$nome_do_aluno. " e ". $resultado_da_media  ?>

    </h2>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>