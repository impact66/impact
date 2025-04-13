
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Príklad</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <?php include 'aside.php'; ?>

    <div class="content">
        <h1>Bullshit</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo asperiores provident sed harum nam est dignissimos dolorem autem animi aspernatur veniam officia sequi doloribus quas, rem labore? Repudiandae, dolore beatae.</p>
    </div>
</div>
 

<?php
$maturita = [
    [
        'color'=> '#696969',
        'text' => 'Prvá veta je takáto',
        'url' => 'https://www.zilinak.sk/',
        'font-weight' => '200',
        'font-size' => '20px',
    ],
    [
        'color'=> '#6b8e23',
        'text' => 'Druhá veta je takáto',
        'url' => 'https://www.youtube.com/',
        'font-weight' => '600',
        'font-size' => '30px',
    ],
    [
        'color'=> '#afeeee',
        'text' => 'Tretia veta je takáto',
        'url' => 'https://soaza.edupage.org/',
        'font-weight' => '800',
        'font-size' => '16px',
    ],
    [
        'color'=> '#ff4500',
        'text' => 'Štvrtá veta je takáto',
        'url' => 'https://www.learn2code.sk/prihlasenie',
        'font-weight' => '200',
        'font-size' => '25px',
    ],
    [
        'color'=> '#ff4538',
        'text' => 'Piata veta je takáto',
        'url' => 'https://www.sme.sk/',
        'font-weight' => '800',
        'font-size' => '18px',
    ],
];

foreach ($maturita as $item) {
    echo "<p style='color: {$item['color']}; font-weight: {$item['font-weight']}; font-size: {$item['font-size']};'>
            <a href='{$item['url']}' target='_blank' style='color: inherit;'>{$item['text']}</a>
          </p>";
}
?>

<?php include 'footer.php'; ?>

</body>
</html>
