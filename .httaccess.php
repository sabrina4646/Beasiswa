<?php
//untuk memecah URL
$dir = explode("/",$_SERVER['REQUEST_URI']);
//untuk mengetahui jumlah direktori
$jml_dir = count($dir);
//untuk mengetahui nama dir
switch($jml_dir){
    case 1 : include "$dir[0].php"; break;
    case 2 : include "$dir[0]/$dir[1].php"; break;
    case 3 : include "$dir[0]/$dir[2]/$dir[3].php"; break;
}

?>