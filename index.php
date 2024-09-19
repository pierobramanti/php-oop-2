<?php

include __DIR__ . '/models/data.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Animal Kingdom Cards</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 mt-4">
            <div class="card mb-4 h-100">
                <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                <div class="card-header fw-bolder fs-5">
                    <?php echo $product->name; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Price: $ <?php echo $product->price; ?></h5>
                    <p class="card-text">This product is made for: <?php echo $product->categorie->icon . " " . $product->categorie->animal; ?></p>
                    <p class="card-text">About this Product: <?php echo $product->GetInfo(); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</body>
</html>