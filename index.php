<?php
require __DIR__ . "/models/products.php";

/* Categorie */
$cats = new Category("Gatti", '<i class="fa-solid fa-cat"></i>');
$dog = new Category("Cani", '<i class="fa-solid fa-dog"></i>');
/* Prodotti */

$products_one = new Products("Lettiera per gatti", 65, $cats, "15kg", "https://cdn.manomano.com/images/images_products/21959017/P/53108939_1.jpg", "Product");
$products_two = new Products("Osso gustoso", 8.99, $dog, "1kg", "https://i0.wp.com/topdogfood.it/wp-content/uploads/2021/01/1544-Osso-di-pelle-di-bufalo-per-cani-con-Trippa-Verde.jpg?fit=900%2C593&ssl=1", "Food");
$products_three = new Products("Buddy", 22, $dog, "15kg", "https://www.modacani.it/prodotti/big/2520.jpg", "Food");
$products_four = new Products("Casetta", 125.50, $cats, "20kg", "https://shop-cdn-m.mediazs.com/bilder/casetta/per/gatti/prince/7/400/37836_katzenhaus_prince_fg_4265_7.jpg", "Product");
$products_five = new Products("Ball", 2.89, $dog, "0.1kg", "https://shop-cdn-m.mediazs.com/bilder/palla/trixie/con/fori/per/cani/ipovedenti/e/ciechi/6/400/211796_trixie_lochball_schelle_hs_05_6.jpg", "Toy");
$products_six = new Products("Jerry's", 11, $cats, "0.2kg", "https://m.media-amazon.com/images/I/41gH34Qi1aL._AC_SX425_.jpg", "Toy");
$array_product = [$products_one, $products_two, $products_three, $products_four, $products_five, $products_six];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="my-container">
        <nav class="menu d-flex justify-content-center m-auto align-items-center">
            <div class="img-logo">
                <img src="./img/logo.jpg" alt="Logo">
            </div>
            <h2 class="ms-2">OOP-2 - Pay Pets</h2>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <h2 class="text-black mt-4">Cards</h2>
            <div class="row mt-2 gy-4">
                <?php for ($i = 0; $i < count($array_product); $i++) { ?>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card my-p-relative">
                            <div class="img-card mb-4">
                                <img src="<?php echo $array_product[$i]->img ?>" alt="">
                            </div>
                            <div class="text-card">
                                <h3 class="text-center mb-3"><?php echo $array_product[$i]->name ?></h3>
                                <p class=" text-center mb-4"><?php echo $array_product[$i]->info ?></p>
                                <div class="tecn d-flex justify-content-between mb-4">
                                    <h4><?php echo $array_product[$i]->price ?></h4>
                                    <h4><?php echo $array_product[$i]->weight ?></h4>
                                </div>
                                <button class="btn btn-light position-absolute bottom-0 start-50 translate-middle"> Add</button>
                            </div>
                            <div class="category">
                                <p><?php echo $array_product[$i]->category->icons ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <div class="footer mt-4">
        <h2 class="text-center">Footer</h2>
    </div>
</body>

</html>