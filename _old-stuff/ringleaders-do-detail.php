<?php
$isNew = $_POST['teamId'];
if($isNew == 'new'){
    header( 'Location: ringleaders-edit-order.php?id=111' );
} else {
    header( 'Location: ringleaders-edit-order.php?id='.$isNew );
}
?>