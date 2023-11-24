<?php

class Random {
    public function nextInt($min, $max) {
        return mt_rand($min, $max);
    }

    public function nextFloat($min, $max) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
}

?>
