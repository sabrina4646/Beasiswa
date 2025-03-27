<?php
session_start();
session_unset();
session_destroy();

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=masuk.php">';
?>