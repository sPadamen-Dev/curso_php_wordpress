<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <!-- Envio de imagem, uso o enctype multipart/form-data -->
        <form method="post" action="tratamento.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6 mb-3">
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>
                <div class="col-6 mb-3">
                    <input class="form-control" type="text" name="idade" placeholder="Idade">
                </div>
                <div class="col-6 mb-3"> 
                    <input class="form-control" type="text" name="email" placeholder="E-mail">
                </div>
                <div class="col-6 mb-3">
                    <input class="form-control" type="text" name="telefone" placeholder="Telefone">
                </div>               
                 <div class="col-12 mb-3">
                    <input type="file" name="arquivo">
                 </div> 
                <div class="col-6 mb-3">
                    <input class="btn btn-success" type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</body>

</html>