<?php
session_start();

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}

if(isset($_POST['numberStyle'])){
    $_SESSION["numberStyle"] = $_POST['numberStyle'];
}

$gender = $_SESSION['gender'];
$colour = $_SESSION['colour'];
$nameStyle = $_SESSION["nameStyle"];
$numberStyle = $_SESSION["numberStyle"];
$position = $_SESSION["position"];
$size = $_SESSION["size"];

$colourArray = array (
    "colour1" => "#000000",
    "colour2" => "#FFFFFF",
    "colour3" => "#2AA9E0",
    "colour4" => "#ED1F7A",
    "colour5" => "#880000",
    "colour6" => "#FF00FF",
    "colour7" => "#C8C847",
    "colour8" => "#76A741"
);

$garmentImageFront = "garment-" . $gender ."-front-" . substr($colour, -1) . ".jpg";
$garmentImageBack = "garment-" . $gender ."-back.jpg";
$leftOrRightOverlay = "garment-" . $gender ."-front-" . $position .".png";
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members completed, thanks.</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Thank you</h2>
                <div class="cboth"></div>
            </div>

            <div class="full-width">
                <p>Thank you for your payment, made on the #00/00/2015#.  Your item should be at the submitted address by #00/00/2015#. This page shows the garment assigned to you.</p>
                <p>Otherwise contact your ringleader at <a href="mailto:ringleader@emailaddress.com">ringleader@emailaddress.com</a> and give him what for, or better still if you know where they live turn up at midnight with two midgets in gimp costumes, has always worked for me.</p>
            </div>

            <div class="showcase">
                <div id="garment-display" data-garment-front="<?php echo $garmentImageFront; ?>" data-garment-back="<?php echo $garmentImageBack; ?>" class="display front">
                    <div id="garment-overlay" style="background: url('uploaded/<?php echo $leftOrRightOverlay; ?>') 0 0 no-repeat">&nbsp;</div>
                </div>
                <div class="view-switch switch">
                    <a href="#" class="button white-button selected" data-view="front">Front</a>
                    <a href="#" class="button white-button" data-view="back">Back</a>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="thank-you-form" action="#" method="post" name="thank-you-form" novalidate="novalidate">
                <div class="row">
                    <h3>Garment summary</h3>
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
                            <td><span class="colour" style="background-color: <?php echo $colourArray[$colour]; ?>">&nbsp;</span></td>
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
                            <th scope="row">Number</th>
                            <td>10</td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="like-label">Cost</div>
                    <div class="like-input">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="summary cost">
                            <tr>
                                <th scope="row">Garment</th>
                                <td>&pound;22.00</td>
                            </tr>
                            <tr>
                                <th scope="row">(p&amp;p)</th>
                                <td>&pound;4.00</td>
                            </tr>
                            <tr class="total">
                                <th scope="row">Total</th>
                                <td>&pound;24.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row button-row">
                    <button type="button" class="button disabled-button" disabled="disabled"><i class="fa fa-fw"></i> All Paid Up</button>
                </div>
                <div class="cleft"></div>
                <div class="helpers">
                    <a href="members-log-out.php"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>