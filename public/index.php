<?php

require_once '../vendor/autoload.php';

use src\Utilities\WordOrNumber;

$word_or_number = new WordOrNumber();
$array_of_values = $word_or_number->word_or_number_values_generator();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linio-IT-Linianos challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="py-5">
    <div class="container">
    <h1 class="fs-3">Challenge output</h1>
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </svg>
        <div>
            There are <?php echo count($array_of_values); ?> values in the output.
        </div>
    </div>
    <div class="shadow p-3 mb-4 bg-body rounded">
        <div class="row">
            <?php
                foreach ($array_of_values as $value) {
                    echo '<div class="col-1">'.$value.'</div>';
                }
            ?>
        </div>
    </div>
    <div class="callout bg-light p-3 rounded">
        <span class="d-block fw-bold">The original serialized output is:</span>
        <p class="text-break"><?php echo serialize($array_of_values); ?></p>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>