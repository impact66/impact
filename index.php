<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Produkty | PHP Projekt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            position: sticky;
            top: 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        section {
            padding: 60px 20px;
            border-bottom: 1px solid #ccc;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: calc(33% - 20px);
            box-sizing: border-box;
        }
        img {
            max-width: 100%;
        }
        h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<?php
$produkty = [
    ["nazov" => "Tričko Beta", "kategoria" => "tricka", "cena" => 20, "zlava" => 10, "obrazok" => "img/tricko.jpg"],
    ["nazov" => "Tričko Red", "kategoria" => "tricka", "cena" => 25, "zlava" => 5, "obrazok" => "img/tricko2.jpg"],
    ["nazov" => "Mikina Beta", "kategoria" => "mikiny", "cena" => 40, "zlava" => 15, "obrazok" => "img/mikina.jpg"],
    ["nazov" => "Nohavice Beta", "kategoria" => "nohavice", "cena" => 35, "zlava" => 0, "obrazok" => "img/nohavice.jpg"]
];

function percent($cena, $zlava) {
    return $cena - ($cena * $zlava / 100);
}

$sekcie = ["produkty" => "Produkty", "onas" => "O nás"];
$kategorie = ["tricka" => "Tričká", "mikiny" => "Mikiny", "nohavice" => "Nohavice"];
?>

<header>
    <nav>
        <?php foreach($sekcie as $id => $nazov): ?>
            <a href="#<?= $id ?>"><?= $nazov ?></a>
        <?php endforeach; ?>
    </nav>
</header>

<section id="produkty">
    <h2>Naše produkty (<?= count($produkty) ?>)</h2>

    <?php foreach($kategorie as $katKey => $katNazov): ?>
        <h3><?= $katNazov ?></h3>
        <div class="product-container">
        <?php foreach($produkty as $produkt): ?>
            <?php if ($produkt["kategoria"] === $katKey): ?>
                <div class="product">
                    <h4><?= $produkt["nazov"] ?></h4>
                    <img src="<?= $produkt["obrazok"] ?>" alt="<?= $produkt["nazov"] ?>">
                    <p>Cena: <?= $produkt["cena"] ?> &euro;</p>
                    <?php if ($produkt["zlava"] > 0): ?>
                        <p>Zľava: <?= $produkt["zlava"] ?>% => Nová cena: <strong><?= percent($produkt["cena"], $produkt["zlava"]) ?> &euro;</strong></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</section>

<section id="onas">
    <h2>O nás</h2>
    <p>Sme moderný obchod s oblečením. Naším cieľom je priniesť kvalitné oblečenie každému!</p>
    <img src="img/o_nas.jpg" alt="O nas">
</section>

</body>
</html>