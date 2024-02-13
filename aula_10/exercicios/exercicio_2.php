<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <?php
        $primeiro_numero= $_GET["numero_1"];
        $segundo_numero= $_GET["numero_2"];
        $terceiro_numero= $_GET["numero_3"];
        $numero_maior = $primeiro_numero;

        if($numero_maior < $segundo_numero){
            $numero_maior = $segundo_numero;
        }elseif($numero_maior < $terceiro_numero){
            $numero_maior = $terceiro_numero;
        }else{
             $numero_maior;
        };

    ?>


  
    <form class="">

        <div class="mb-3">
            <label class="form-label">Numero 1</label>
            <input type="number" name="numero_1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Numero 2</label>
            <input type="number" name="numero_2" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero 3</label>
            <input type="number" name="numero_3" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <h2>
        <?php echo "O numero maior e " . $numero_maior  ?>

    </h2>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>