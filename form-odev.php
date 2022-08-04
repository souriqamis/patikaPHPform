<?php


function mod($e)
{
    if ($e % 3 == 0) {
        echo "Sayınız 3e bölünüyor.";
    } elseif ($e % 3 == 1) {
        echo "Sayınız 3e bölünmüyor. En yakın değer= " . $e + 2;
    } elseif ($e % 3 == 2) {
        echo "Sayınız 3e bölünmüyor. En yakın değer= " . $e + 1;
    } else {
        echo "Geçerli bir sayı giriniz";
    }
}

mod($_POST['sayi']);