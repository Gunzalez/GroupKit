<?php
$isNew = $_POST['teamId'];
if($isNew == 'new'){
    header( 'Location: ringleaders-order-detail.php?id=111' );
} else {
    header( 'Location: ringleaders-order-detail.php?id='.$isNew );
}
?>