<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include 'array.php';
    ?>
    <div class="container">
        <div class="row">
        <div class="col-12 d-flex flex-row">
    <?php foreach ($hotels as $hotel) { ?>
        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title"><?php echo $hotel["name"]; ?></h2>
                <p class="card-text"><strong>Descrizione<br></strong><?php echo $hotel["description"]; ?></p>
                <p class="card-text">Voto:<?php echo $hotel["vote"]; ?></p>

            </div>
        </div>
    <?php } ?>
</div>
</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>