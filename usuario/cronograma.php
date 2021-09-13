<?php
$titulo = "Administrador";
include_once('inc/header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <?php
                include_once('inc/calendarios/calendario.php');
                
                ?>

            </div>
        </div>
    </div>
</body>

</html>



<?php include_once('inc/footer.php'); ?>