<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <div id="app">
        <app>
        <br>
            <h1>Pagina de productos</h1><br>

            <?php if(isset($product)): ?>
                <h2>Producto: <?= $product["nombre"] ?></h2>
                <br>
            <?php endif; ?>

            <?php if(isset($products)): ?>
                <ol>
                    <?php foreach($products as $item): ?>
                    <li><?= $item["nombre"] ?></li>
                    <?php endforeach; ?>
                </ol>
                <br>
            <?php endif; ?>
            

            <?php if(isset($message)): ?>
                <h3><?= $message ?></h3>
            <?php endif; ?>
        </app>
    </div>

    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/app.css">
</body>
</html>