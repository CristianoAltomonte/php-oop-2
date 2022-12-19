<?php

include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/toy.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/accessory.php';


$category = [
    'cane' => new Category('Cane', 'icon-font-awesome-giallo'),
    'gatto' => new Category('Gatto', 'icon-font-awesome-giallo'),
    'uccello' => new Category('Uccello', 'icon-font-awesome-giallo'),

];

$prodotti = [
    new Food('prosciutto,riso', 545, 'Royal Canin', 'https://picsum.photos/200', 43.99, $category['cane']),
    new Food('manzo,cereali', 600, 'Almo Nature', 'https://picsum.photos/200', 43.99, $category['cane']),
    new Toy('Morbido con codino in coda', '8,5 x 10', 'Topini di peluche Trixie', 'https://picsum.photos/200', 4.99, $category['gatto']),
    new Accessory('Legno', 'M: L 83 x P 67 x H 153cm', 'Voliera', 'https://picsum.photos/200', 184.99, $category['uccello']),

];


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="d-flex">

            <?php foreach ($prodotti as $elem) { ?>


                <div class="card" style="width: 18rem;">
                    <img src=" <?php echo $elem->immagine ?>  " class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text fs-5"><?php echo ('<b>' . $elem->nome . '</b>'); ?></p>
                        <p><?php echo ($elem->category->icona . ' ' . $elem->category->nome); ?></p>
                        <p class="card-text fs-7">Prezzo: <?php echo ($elem->prezzo . ' ' . 'Euro'); ?></p>

                        <?php if (get_class($elem) == "Cibo") { ?>

                            <p class="card-text fs-7">Peso netto: <?php echo ($elem->peso); ?></p>
                            <p class="card-text fs-7">Ingredienti: <?php echo ($elem->ingredienti); ?></p>

                        <?php } elseif (get_class($elem) == "Accessori") { ?>

                            <p class="card-text fs-7">Materiale: <?php echo ($elem->materiale); ?></p>
                            <p class="card-text fs-7">Dimensioni: <?php echo ($elem->dimensioni); ?></p>

                        <?php } elseif (get_class($elem) == "Giocattoli") { ?>

                            <p class="card-text fs-7">Caratteristiche: <?php echo ($elem->caratteristiche); ?></p>
                            <p class="card-text fs-7">Dimensioni: <?php echo ($elem->dimensioni); ?></p>

                        <?php }; ?>

                    </div>

                </div>

            <?php } ?>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>