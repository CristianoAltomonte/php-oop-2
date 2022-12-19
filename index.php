<?php

include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/toy.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/accessory.php';


$category = [
    'cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'uccello' => new Category('Uccello', '<i class="fa-solid fa-crow"></i>'),

];

$prodotti = [
    new Food('prosciutto, riso', 545, 'Royal Canin', 'https://cdn.animeddirect.co.uk/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/r/o/royal-canin-anallergenic-dry-dog-food-8kg.jpg', 43.99, $category['cane']),
    new Food('manzo, cereali', 600, 'Almo Nature', 'https://cdn.shopify.com/s/files/1/0612/0443/1024/products/fm_2019_04_15_08_50_19_25871_images_1080x.jpg?v=1649837671', 43.99, $category['cane']),
    new Toy('Morbido con codino in coda', '8,5 cm x 10 cm', 'Topini di peluche Trixie', 'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/800/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', 4.99, $category['gatto']),
    new Accessory('Legno', 'M: L 83 x P 67 x H 153cm', 'Voliera', 'https://cdn11.bigcommerce.com/s-9hte4zottw/images/stencil/1280w/products/773/2580/950631a__54335.1658139372.jpg?c=1', 184.99, $category['uccello']),

];


?>

<!doctype html>
<html lang="en">

<head>
    <title>Boolshop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="w-75 m-auto py-5">

        <h1>Boolshop</h1>
        <h2>I nostri prodotti</h2>

        <div class="d-flex justify-content-between py-5">

            <?php foreach ($prodotti as $elem) { ?>


                <div class="card" style="width: 16rem;">
                    <img src=" <?php echo $elem->immagine ?>  " class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text fs-5"><?php echo ('<b>' . $elem->nome . '</b>'); ?></p>
                        <p><?php echo ($elem->category->icona . ' ' . $elem->category->nome); ?></p>
                        <p class="card-text fs-7">Prezzo: <?php echo ($elem->prezzo . ' ' . 'Euro'); ?></p>

                        <?php if (get_class($elem) == "Food") { ?>

                            <p class="card-text fs-7">Peso netto: <?php echo ($elem->pesoNetto . 'g'); ?></p>
                            <p class="card-text fs-7">Ingredienti: <?php echo ($elem->ingredienti); ?></p>

                        <?php } elseif (get_class($elem) == "Accessory") { ?>

                            <p class="card-text fs-7">Materiale: <?php echo ($elem->materiale); ?></p>
                            <p class="card-text fs-7">Dimensioni: <?php echo ($elem->dimensioni); ?></p>

                        <?php } elseif (get_class($elem) == "Toy") { ?>

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