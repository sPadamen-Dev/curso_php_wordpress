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
        $email = $_POST["email"];
        $password = $_POST["password"];
            if($email === "admin@admin.com" || $password == 123456){
                    $res = "voce esta logado com sucesso";
                    echo $res;
            }else{
                    $res = "Email ou senha invalido!";
                    echo $res;
            };


    ?>


    <div class="container">

        <form action="exercicio_1.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="checkbox" for="exampleCheck1">Aceito termos e condicoes</label>
            </div>
            <div class="d-flex gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="submit" class="btn btn-primary" onclick="login()">Logar</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>