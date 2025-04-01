<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Nastavenie cesty k zložke so súbormi
$folder = 'uploads/';

// Povolené prípony pre každú kategóriu
$file_types = [
    'word' => ['doc', 'docx'],
    'excel' => ['xls', 'xlsx'],
    'pdf' => ['pdf']
];

// Načítanie súborov zo zložky
$files = scandir($folder);

// Triedenie súborov do kategórií
$sorted_files = [
    'word' => [],
    'excel' => [],
    'pdf' => []
];

foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        foreach ($file_types as $type => $extensions) {
            if (in_array(strtolower($ext), $extensions)) {
                $sorted_files[$type][] = $file;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoznam súborov</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }
        .column {
            width: 30%;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="column">
            <h3>Word súbory</h3>
            <ul>
                <?php foreach ($sorted_files['word'] as $file): ?>
                    <li><a href="<?= $folder . $file ?>" download><?= $file ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="column">
            <h3>Excel súbory</h3>
            <ul>
                <?php foreach ($sorted_files['excel'] as $file): ?>
                    <li><a href="<?= $folder . $file ?>" download><?= $file ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="column">
            <h3>PDF súbory</h3>
            <ul>
                <?php foreach ($sorted_files['pdf'] as $file): ?>
                    <li><a href="<?= $folder . $file ?>" download><?= $file ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>



</body>
</html>