<?php

function rectangular_pillar($height) {

    function rectangle($height, $width) {
        return　$height * $width; 
    }
    
    $area = rectangle(3, 4);
    return $area * $height;
    
}

echo rectagle_pillar(10);