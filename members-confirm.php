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
                <a href="members-back.php" class="button back-button white-button">Back</a>
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
                <div style="min-height: 180px">
                    <p>There are no PSDs or wire-frames for the page, I presume it will contain a summary of their selection. Please supply, or Rob can build it.</p>
                    <p>See those buttons below the display there, lets user see front and back of their selection before payment, I did good, yes?</p>
                </div>
                <div class="row button-row">
                    <input type="submit" value="Make payment" class="button" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Confirm%20and%20Pay" class="button white-button">Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button">Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>