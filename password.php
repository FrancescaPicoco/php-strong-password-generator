<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php 
    include "function.php"
?>
<?php
$lenght = $_GET['lenght']?? "null";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12 bg-dark p-5"></div>
        <div class="col-12 bg-dark p-3 text-light text-center"><b class="fs-1">STRONG PASSWORD GENERATOR</b></div>
        <div class="offset-1">
            <div class="col-10 text-center text-bg-secondary"><b class="fs-3">GENERA LA TUA PASSWORD CASUALE</b>
            </div>
            <div class="offset-3 col-5 text-center text-bg-light">
            <?php include "form.php"?>
            </div>
            <div class="offset-3 col-5 text-center text-bg-light">
               <b class="fs-2"><?php echo rndPsw($lenght) ?></b>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>