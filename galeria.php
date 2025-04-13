<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galéria</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<?php include 'function.php'; ?>

<div class="container">
    <?php include 'aside.php'; ?>

    <div class="content">
        <h1>Galéria</h1>

        <?php
        if (!empty($_GET['album'])) {
            $album = $_GET['album'];
            echo "<h2>$album</h2>";

            $pocet_obrazkov = pocet_obrazkov_v_galerii($album);
            echo "<p>Počet obrázkov: $pocet_obrazkov</p>";

            foreach (array_diff(scandir("GALERIA/$album"), ['.', '..']) as $obrazok) {
                echo "<img src=\"GALERIA/$album/$obrazok\" alt=\"$obrazok\" style=\"width: 200px; margin: 10px;\">";
            }
        } else {
            echo "<p>Vyberte album z ponuky.</p>";
        }
        ?>

    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
