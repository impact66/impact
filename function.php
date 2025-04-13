<?php
function pocet_obrazkov_v_galerii($album) {
    $directory = 'C:/laragon/www/webIO/GALERIA/' . $album;

    
    if (!is_dir($directory)) {
        return 0;
    }

    $obrazky = glob($directory . '/*.jpg'); 

    if ($obrazky === false) {
        return 0;
    }

    $pocet = 0;
    foreach ($obrazky as $obrazok) {
        if (is_file($obrazok)) {
            $pocet++;
        }
    }

    return $pocet;
}
