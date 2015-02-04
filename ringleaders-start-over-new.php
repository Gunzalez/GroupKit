<?php
session_start();
session_unset();
session_destroy();
header( 'Location: ringleaders-choose-garment.php' );
?>