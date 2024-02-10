<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<?php
if (isset($_REQUEST['nome']) && $_REQUEST['nome'] != '') {
    $nome = $_REQUEST['nome'];
} else {
    $nome = "Nome não informado";
}
$telefone = $_REQUEST['telefone'];
$idade = $_REQUEST['idade'];
$email = $_REQUEST['email'];

// var_dump($_REQUEST);
// var_dump($_FILES['arquivo']);

// Basename pega o nome do arquivo
// echo basename($_FILES['arquivo']['name']);

// No windows, lembrar de inverter as barras
// Defino onde o arquivo será salvo
$diretorioDestino = "C:/xampp/htdocs/php-wordpress/aula-10/exemplos/";

// Concateno o diretorio de destino com o nome do arquivo
$caminhoCompleto = $diretorioDestino . basename($_FILES['arquivo']['name']);

// Movo o arquivo do diretorio temporário para o $caminhoCompleto
move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminhoCompleto);
?>

<body>
    <h1>Bem Vindo</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">Olá <?php echo $nome; ?></div>
            <div class="col-6">Seu telefone é <?php echo $telefone; ?></div>
            <div class="col-6">Sua idade é <?php echo $idade; ?></div>
            <div class="col-6">Seu e-mail é <?php echo $email; ?></div>
        </div>
        <img src="<?php echo $_FILES['arquivo']['name']; ?>">
    </div>
</body>

</html>