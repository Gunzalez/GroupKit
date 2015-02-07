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

if(isset($_POST['size'])){
    $_SESSION["size"] = $_POST['size'];
}

if(isset($_POST['colour'])){
    $_SESSION["colour"] = $_POST['colour'];
}

if(!isset($_SESSION["nameStyle"])){
    $_SESSION["nameStyle"] = 'signikabold';
}

if(!isset($_SESSION["position"])){
    $_SESSION["position"] = 'left';
}

$gender = $_SESSION['gender'];
$colour = $_SESSION['front-font-colour'];
$size = $_SESSION['size'];

$nameStyle = $_SESSION['nameStyle'];
$position = $_SESSION['position'];

$mensImage = "ringleaders-garment-mens-front.jpg";
$womensImage = "ringleaders-garment-womens-front.jpg";

?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders personalise front</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Personalise the front</h2>
                <a href="ringleaders-choose-garment.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" data-gender-mens="<?php echo $mensImage; ?>" data-gender-womens="<?php echo $womensImage; ?>" class="display front set-image">&nbsp;</div>
                <div class="gender-switch switch">
                    <a href="#" class="button white-button<?php echoIfEqual('womens', $gender, ' selected'); ?>" data-gender="womens">Womens</a>
                    <a href="#" class="button white-button<?php echoIfEqual('mens', $gender, ' selected'); ?>" data-gender="mens">Mens</a>
                </div>
                <div class="details">
                    <h3>Choose a personalisation to<br>set its options</h3>
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="ringleaders-front-form" action="ringleaders-personalise-back.php" method="post" name="ringleaders-front-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" /> <!-- needed for gender display, but you can do it your way -->
                <div class="row">
                    <div class="like-label">Choose allowed font colours</div>
                    <div class="like-input font-switch swatches">
                        <label for="colour1"><span class="colour <?php echoIfEqual('colour1', $colour, ' selected'); ?>" style="background-color: #000000"></span></label>
                        <input id="colour1" type="radio" name="colour" value="colour1"<?php echoIfEqual('colour1', $colour, ' checked'); ?>>
                        <label for="colour2"><span class="colour <?php echoIfEqual('colour2', $colour, ' selected'); ?>" style="background-color: #ffffff"></span></label>
                        <input id="colour2" type="radio" name="colour" value="colour2"<?php echoIfEqual('colour2', $colour, ' checked'); ?>>
                        <label for="colour3"><span class="colour <?php echoIfEqual('colour3', $colour, ' selected'); ?>" style="background-color: #2AA9E0"></span></label>
                        <input id="colour3" type="radio" name="colour" value="colour3"<?php echoIfEqual('colour3', $colour, ' checked'); ?>>
                        <label for="colour4"><span class="colour <?php echoIfEqual('colour4', $colour, ' selected'); ?>" style="background-color: #ED1F7A"></span></label>
                        <input id="colour4" type="radio" name="colour" value="colour4"<?php echoIfEqual('colour4', $colour, ' checked'); ?>>
                        <label for="colour5"><span class="colour <?php echoIfEqual('colour5', $colour, ' selected'); ?>" style="background-color: #880000"></span></label>
                        <input id="colour5" type="radio" name="colour" value="colour5"<?php echoIfEqual('colour5', $colour, ' checked'); ?>>
                        <label for="colour6"><span class="colour <?php echoIfEqual('colour6', $colour, ' selected'); ?>" style="background-color: #FF00FF"></span></label>
                        <input id="colour6" type="radio" name="colour" value="colour6"<?php echoIfEqual('colour6', $colour, ' checked'); ?>>
                        <label for="colour7"><span class="colour <?php echoIfEqual('colour7', $colour, ' selected'); ?>" style="background-color: #C8C847"></span></label>
                        <input id="colour7" type="radio" name="colour" value="colour7"<?php echoIfEqual('colour7', $colour, ' checked'); ?>>
                        <label for="colour8"><span class="colour <?php echoIfEqual('colour8', $colour, ' selected'); ?>" style="background-color: #76A741"></span></label>
                        <input id="colour8" type="radio" name="colour" value="colour8"<?php echoIfEqual('colour8', $colour, ' checked'); ?>>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <h3 class="zero-padding">Personalise the team</h3>
                </div>
                <div class="row">
                    <label for="front-text">Name</label>
                    <input type="text" id="front-text" value="" placeholder="Team name" class="input">
                </div>
                <div class="row">
                    <div class="like-label">Personalise options</div>
                    <div class="like-input block">
                        <input id="same" type="radio" name="personaliseOptions" checked="checked" value="" >
                        <label for="same">Same text for all</label><br class="cleft" />
                        <input id="members" type="radio" name="personaliseOptions" value="">
                        <label for="members">Each choose their own</label><br class="cleft" />
                        <input id="choose" type="radio" name="personaliseOptions" value="">
                        <label for="choose">I'll choose for each</label>
                        <input type="text" id="" value="" placeholder="Text goes here" class="input">
                    </div>
                </div>

                <div class="row">
                    <div class="like-label">&nbsp;</div>
                    <div class="like-input">
                        <input type="checkbox" id="own-logo" type="radio" name="own-logo" value=""> <label for="own-logo" class="small">Use my own logo</label>
                    </div>
                    <p class="info important"><strong><a href="#">You must read Logo guidelines!</a></strong></p>
                </div>

                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Personalise the back</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Personalise%20The%20Front&view=front" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-start-over-new.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>