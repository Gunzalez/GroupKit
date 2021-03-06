<?php
session_start();
if(isset($_POST['style'])){
    $_SESSION["style"] = $_POST['style'];
}
if(isset($_POST['position'])){
    $_SESSION["position"] = $_POST['position'];
}
if(isset($_POST['nameStyle'])){
    $_SESSION["nameStyle"] = $_POST['nameStyle'];
}

$gender = $_SESSION['gender'];
$colour = $_SESSION['colour'];
$nameStyle = $_SESSION["nameStyle"];
$numberStyle = $_SESSION["numberStyle"];

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}

$garmentBackImage = "garment-" . $gender . "-back.jpg";
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members personalise back</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Personalise the back</h2>
                <a href="members-front.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" style="background: url('uploaded/<?php echo $garmentBackImage; ?>') 0 0 no-repeat" class="display">&nbsp;</div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="personalise-back-form" action="members-confirm.php" method="post" name="personalise-back-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" /> <!-- needed for gender display, but you can do it your way -->

                <div class="row">
                    <label for="front-text">Number</label>
                    <input type="text" id="front-text" value="10" maxlength="5" class="input short-input">
                </div>

                <div class="row">
                    <div class="like-label">Number</div>
                    <div class="like-input">
                        <span id="chosen-number" class="chosen-number big" style="font-family: <?php echo $numberStyle; ?>">10</span>
                        <p>This is the number selected by your Ringleader.</p>
                    </div>
                </div>

                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Confirm and pay</button>
                </div>
                <div class="cleft"></div>
                <div class="helpers">
                    <a href="members-start-over.php"><i class="fa fa-fw"></i> Start over</a>
                    <a href="members-log-out.php"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>