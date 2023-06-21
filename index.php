<?php 

    include __DIR__. '/database.php'

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8527d0e473.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="container w-50">
            <div class="row py-5">
                <div class="col">
                    <h1>Matt Store</h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container w-50">
            <div class="row">
                <div class="col">
                    <h4>I nostri prodotti</h4>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-wrap justify-content-between ">

                    <!-- foreach per le card FOOD -->

                    <?php foreach($InfoFoodArray as $food){ ?>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="<?php echo $food->immagine; ?>" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $food->nome ?>
                                </h4>
                                <p class="card-text">
                                    <?php echo addIcon($food->razza); ?>
                                    <?php echo $food->razza ?>
                                </p>
                                
                                <p class="card-text">
                                    <strong>Prezzo:</strong>
                                    <?php echo $food->prezzo ?>
                                </p>

                                <p class="card-text">
                                    <strong>Peso netto:</strong>
                                    <?php echo $food->peso ?>
                                </p>

                                <p class="card-text">
                                    <strong>Ingredienti:</strong>
                                    <?php echo $food->ingredienti ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- foreach per le card OBJECT -->
                    
                    <?php foreach($InfoObjectArray as $object){ ?>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="<?php echo $object->immagine; ?>" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $object->nome ?>
                                </h4>
                                <p class="card-text">
                                <?php echo addIcon($object->razza); ?>
                                    <?php echo $object->razza ?>
                                </p>
                                
                                <p class="card-text">
                                    <strong>Prezzo:</strong>
                                    <?php echo $object->prezzo ?>
                                </p>

                                <p class="card-text">
                                    <strong>Materiale:</strong>
                                    <?php echo $object->materiale ?>
                                </p>

                                <p class="card-text">
                                    <strong>Dimensioni:</strong>
                                    <?php echo $object->dimensione ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- foreach per le card OBJECT -->

                    <?php foreach($InfoPlayArray as $play){ ?>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="<?php echo $play->immagine; ?>" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $play->nome ?>
                                </h4>
                                <p class="card-text">
                                <?php echo addIcon($play->razza); ?>
                                    <?php echo $play->razza ?>
                                </p>
                                
                                <p class="card-text">
                                    <strong>Prezzo:</strong>
                                    <?php echo $play->prezzo ?>
                                </p>

                                <p class="card-text">
                                    <strong>Caratteristiche:</strong>
                                    <?php echo $play->caratteristiche ?>
                                </p>

                                <p class="card-text">
                                    <strong>Dimensioni:</strong>
                                    <?php echo $play->dimensione ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </main>
</body>
</html>