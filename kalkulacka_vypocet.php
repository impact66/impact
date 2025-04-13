<?php
session_start();

$cislo = isset($_POST['cislo']) ? trim($_POST['cislo']) : '';
$operation = isset($_POST['operation']) ? $_POST['operation'] : '';

if ($operation !== '=') {
    if (is_numeric($cislo)) {
        $_SESSION['prve'] = $cislo;
        $_SESSION['op'] = $operation;
        $_SESSION['msg'] = "Zadaj druhé číslo a stlač '=' pre výsledok.";
    } else {
        $_SESSION['msg'] = "Zadaj platné číslo!";
    }
} else {
    if (isset($_SESSION['prve'], $_SESSION['op']) && is_numeric($cislo)) {
        $prve = $_SESSION['prve'];
        $op = $_SESSION['op'];
        $druhe = $cislo;

        if ($op == '+') {
            $vysledok = $prve + $druhe;
        } elseif ($op == '-') {
            $vysledok = $prve - $druhe;
        } elseif ($op == '*') {
            $vysledok = $prve * $druhe;
        } elseif ($op == '/') {
            $vysledok = ($druhe != 0) ? $prve / $druhe : "Chyba";
        } else {
            $vysledok = "Neznáma operácia";
        }

        
        $counterFile = "pocitadlo.txt";
        if (!file_exists($counterFile)) {
            file_put_contents($counterFile, "0");
        }
        $count = (int)file_get_contents($counterFile);
        $count++;
        file_put_contents($counterFile, $count);
        
        $dir = "vypocty";
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        
        $fileName = $dir . "/vsetky_vypocty.txt"; 
        $record = "$prve $op $druhe = $vysledok\n";
        
        file_put_contents($fileName, $record, FILE_APPEND);
        
        unset($_SESSION['prve'], $_SESSION['op']);
        $_SESSION['msg'] = "Výsledok: $vysledok";
        } else {
            $_SESSION['msg'] = "Najprv zadaj číslo a operáciu.";
        }
}

header("Location: kalkulacka.php");
exit;
