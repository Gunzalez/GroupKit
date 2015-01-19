<?php
session_start();
if(isset($_POST['numberStyle'])){
    $_SESSION["numberStyle"] = $_POST['numberStyle'];
}

$gender = $_SESSION['gender'];
$colour = $_SESSION['colour'];
$nameStyle = $_SESSION["nameStyle"];
$numberStyle = $_SESSION["numberStyle"];
$position = $_SESSION["position"];
$size = $_SESSION["size"];

$garmentImageFront = "garment-womens-front.jpg";
$garmentImageBack = "garment-womens.jpg";
if($gender == 'mens'){
    $garmentImageFront = "garment-mens-front.jpg";
    $garmentImageBack = "garment-mens.jpg";
}

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members confirm and pay</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Completed</h2>
                <!-- <a href="members-back.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a> -->
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" data-garment-front="<?php echo $garmentImageFront; ?>" data-garment-back="<?php echo $garmentImageBack; ?>" class="display back">
                    <span class="figure small front <?php echo $position; ?>" data-figure="name" style="color: <?php echo $colour; ?>; font-family: '<?php echo $nameStyle; ?>';">
                        XXXX
                    </span>
                    <span class="figure small back" data-figure="name" style="color: <?php echo $colour; ?>; font-family: '<?php echo $nameStyle; ?>';">
                        XXXX
                    </span>
                    <span class="figure big back" data-figure="number" style="color: <?php echo $colour; ?>; font-family: '<?php echo $numberStyle; ?>';">
                        10
                    </span>
                </div>
                <div class="view-switch switch">
                    <a href="#" class="button white-button selected" data-view="back">Back</a>
                    <a href="#" class="button white-button" data-view="front">Front</a>
                </div>
            </div>

            <form class="form" id="confirm-and-pay-form" action="paypal.php" method="post" name="confirm-and-pay-form" novalidate="novalidate">
                <div class="row">
                    <div class="like-label">Summary</div>
                    <div class="like-input">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="summary">
                            <tr>
                                <th scope="row">Gender</th>
                                <td><?php echo $gender; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Size</th>
                                <td><?php echo $size; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Colour</th>
                                <td><span class="colour" style="background-color: <?php echo $colour ?>">&nbsp;</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Chest position</th>
                                <td><?php echo $position; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>Coke Zero</td>
                            </tr>
                            <tr>
                                <th scope="row">(style)</th>
                                <td><?php echo $nameStyle; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Number</th>
                                <td>27</td>
                            </tr><tr>
                                <th scope="row">(style)</th>
                                <td><?php echo $numberStyle; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="like-label">Cost</div>
                    <div class="like-input">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="summary cost">
                            <tr>
                                <th scope="row">Amount</th>
                                <td>&pound;22.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row button-row">
                    <button type="button" class="button disabled-button" disabled="disabled"><i class="fa fa-fw"></i> Payment made</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Confirm%20and%20Pay" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>