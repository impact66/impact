<aside>
    <?php if (basename($_SERVER['SCRIPT_NAME']) == 'galeria.php') : ?>
        <h2>Galéria</h2>
        <ul>
            <?php
                $adresar = 'GALERIA';
                $priecinky = array_diff(scandir($adresar), ['.', '..']);

               
                $aktualny_album = isset($_GET['album']) ? $_GET['album'] : '';

                foreach ($priecinky as $priecinok) {
                   
                    $selected = ($priecinok == $aktualny_album) ? 'selected' : '';
                    echo "<li><a href=\"galeria.php?album=$priecinok\" class=\"album-item $selected\">$priecinok</a></li>";
                }
            ?>
        </ul>
    <?php endif; ?>
</aside>


