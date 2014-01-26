<?php

$rastgele = rand(100,20000);


header ("Content-type: image/jpeg"); 
$resim = ImageCreate (180,25);  // resmin boyutları belirleniyor. 
$red = ImageColorAllocate($resim,255, 0, 0);  // arkaplan rengi 
$white = ImageColorAllocate($resim, 255, 255, 255);  // ön plan rengi 
ImageString($resim, 5, 5, 5, $rastgele, $white);  //yazının yeri ve rengi 
ImageJpeg($resim); 
ImageDestroy($resim); //Hafiza temizleniyor.

