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
                <h2>Confirm and pay</h2>
                <a href="members-back.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" class="display back <?php echo $gender; ?>">
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

            <form class="form" id="confirm-and-pay-form" action="#" method="post" name="confirm-and-pay-form" novalidate="novalidate">
                <div class="row">
                    <div class="like-label">Summary</div>
                    <div class="like-input summary">
                        <p>No PSDs/wire-frames for this page, I presume full summary of selection. Meanwhile, Front/Back buttons let users see their selection before payment, nice touch, yes?</p>
                    </div>
                    <div class="like-label">Cost</div>
                    <div class="like-input summary">
                        <p>Perhaps some table here with costs, images of PayPal or credit/debit cards, y'know the usual.</p>
                    </div>
                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Make payment</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Confirm%20and%20Pay" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>