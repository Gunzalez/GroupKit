<?php
session_start();

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}

if(isset($_POST['gender'])){
    $_SESSION["gender"] = $_POST['gender'];
}
if(isset($_POST['colour'])){
    $_SESSION["colour"] = $_POST['colour'];
}
if(isset($_POST['size'])){
    $_SESSION["size"] = $_POST['size'];
}

$gender = $_SESSION['gender'];
$colour = $_SESSION['colour'];
$size = $_SESSION['size'];
$nameStyle = $_SESSION['nameStyle'];
$position = $_SESSION['position'];

$imageFront = "garment-" . $gender ."-front-" . substr($colour, -1) . ".jpg";
$leftOverlay = "garment-" . $gender ."-front-left.png";
$rightOverlay = "garment-" . $gender ."-front-right.png";
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members personalise the front</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Personalise the front</h2>
                <a href="members-choose.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" style="background: url('uploaded/<?php echo $imageFront; ?>') 0 0 no-repeat" class="display">
                    <div id="garment-overlay" data-image-left="<?php echo $leftOverlay; ?>"  data-image-right="<?php echo $rightOverlay; ?>">&nbsp;</div>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="personalise-front-form" action="members-back.php" method="post" name="personalise-front-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" /> <!-- needed for gender display, but you can do it your way -->
                <div class="row">
                    <div class="like-label">Position</div>
                    <div class="like-input position-switch">
                        <input id="left" type="radio" name="position" value="left"<?php echoIfEqual('left', $position, ' checked'); ?>>
                        <label for="left" class="left">Left chest</label>
                        <input id="right" type="radio" name="position" value="right"<?php echoIfEqual('right', $position, ' checked'); ?>>
                        <label for="right" class="right">Right chest</label>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Name style</div>
                    <div class="like-input style-switch block">
                        <input id="style4" type="radio" name="nameStyle" value="signikabold"<?php echoIfEqual('signikabold', $nameStyle, ' checked'); ?>>
                        <label for="style4">Signika Bold</label><br class="cleft" />
                        <input id="style1" type="radio" name="nameStyle" value="Verdana"<?php echoIfEqual('Verdana', $nameStyle, ' checked'); ?>>
                        <label for="style1">Verdana</label><br class="cleft" />
                        <input id="style2" type="radio" name="nameStyle" value="Arial"<?php echoIfEqual('Arial', $nameStyle, ' checked'); ?>>
                        <label for="style2">Some-long FontName</label><br class="cleft" />
                        <input id="style3" type="radio" name="nameStyle" value="Century Gothic"<?php echoIfEqual('Century Gothic', $nameStyle, ' checked'); ?>>
                        <label for="style3">Century Gothic</label>
                    </div>
                </div>

                <div class="row">
                    <label for="front-text">Name</label>
                    <input type="text" id="front-text" value="Coke Zero" class="input">
                </div>

                <div class="row">
                    <div class="like-label">Name</div>
                    <div class="like-input">
                        <span id="chosen-name" class="chosen-name" style="font-family: <?php echo $nameStyle; ?>">Coke Zero</span>
                        <p>This is the name selected by your Ringleader.</p>
                    </div>
                </div>

                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Personalise the back</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Personalise%20The%20Front&view=front" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a><br />
                    <a href="members-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>