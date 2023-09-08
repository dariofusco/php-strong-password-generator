<?php

include 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="py-5 text-success">Php Password Generator</h1>
        <div class="row">
            <div class="col">
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label class="form-label">Inserisci lunghezza password da generare:</label>
                        <input class="form-control" name="generaPassword" style="width: 250px;">
                    </div>
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <h2 class="py-4">La tua password è: <span class="text-danger"><?php echo generaPassword($passwordLunghezza) ?></span></h2>
                </form>
            </div>
        </div>
    </div>

</body>

</html>