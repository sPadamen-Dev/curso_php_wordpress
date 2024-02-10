<?php
// phpinfo();
// print_r($_SERVER);
// print_r($_REQUEST);
print_r($_GET);

// echo "<pre>"; 
// print_r($_SERVER);
// echo "<pre>"; 
?>

<!DOCTYPE html>
<html lan g="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Olá <?php echo $_GET['nome']; ?></h1>
    <?php if(isset($_GET['idade'])) { ?>
        <h2>Sua idade é <?php echo $_GET['idade']; ?></h2>
    <?php } else {?>
        <h2><?php echo $_GET['nome']; ?>, você não definiu a idade.</h2>
    <?php } ?>
</body>

</html>