<?php  
    $index = 1;
    while ($index <= $numPage ) {
        ?>
            <button onclick="changePage(<?php echo $index ?>)"><?php echo $index ?></button>
        <?php
        $index++;
    }
?>