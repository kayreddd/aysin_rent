<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/home.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/feedProduct.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/product1.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/product2.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/product3.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/product4.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/product5.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/checkout.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/navbar.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    </head>
    <body>
        <?= $navbar ?>
        <?= $page_content ?>
        <!-- <?= $footer ?> -->
    </body>
</html>
