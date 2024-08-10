<?php

function discount($price, $discount) {
    return intval($price * $discount / 1000) * 1000;
}

function currencyFormat($number) {
    return "Rp" . number_format($number, 0, ",", ".");
}
