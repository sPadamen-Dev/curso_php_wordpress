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
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $data_nascimento = $_POST["data"];
        $cartao = $_POST["selectcartao"];
    ?>
    <div class="container">
        <form action="exercicio_4.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seu email:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Nome: </label>
                <input type="text" name="nome" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputdate" class="form-label">Nascimento: </label>
                <input type="date" name="data" class="form-control" id="exampleInputdate">
            </div>
            <select name="selectcartao" class="form-select" aria-label="Default select example " required>
                <option selected>Selecione sua bandeira de cartao</option>
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
                <option value="elo">Elo</option>
            </select>
            <button type="submit" class="btn btn-primary m-3 w-50">Submit</button>
        </form>

        <?php

        echo '<table class="table table-hover">';
                echo '<tr><td scope="col">Email</td>';
                echo '<td scope="col">Nome</td>';
                echo '<td scope="col">Data de Nascimento</td>';
                echo '<td scope="col">Bandeira do cartao</td></tr>';

                // exibindo valores do _POST

                for($i = 1; $i <= 1; $i++){
                    echo '<tr>';
                    echo "<td scope='col'>". $email ."</td>";
                    echo "<td scope='col'>". $nome ."</td>";
                    echo "<td scope='col'>". $data_nascimento ."</td>";
                    echo "<td scope='col'>". $cartao ."</td>";
                    echo '</tr>';

                };
                 
        echo "</table>";

        
        ?>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>