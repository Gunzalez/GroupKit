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

$mensImage = "ringleaders-garment-mens-back.jpg";
$womensImage = "ringleaders-garment-womens-back.jpg";
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders personalise back</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Personalise the back</h2>
                <a href="ringleaders-personalise-front.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" data-gender-mens="<?php echo $mensImage; ?>" data-gender-womens="<?php echo $womensImage; ?>" class="display back preset">

                </div>
                <div class="gender-switch switch">
                    <a href="#" class="button white-button<?php echoIfEqual('womens', $gender, ' selected'); ?>" data-gender="womens">Womens</a>
                    <a href="#" class="button white-button<?php echoIfEqual('mens', $gender, ' selected'); ?>" data-gender="mens">Mens</a>
                </div>
                <div class="details">
                    <h3>Choose a personalisation to<br>set its options</h3>
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="ringleaders-front-form" action="ringleaders-new-add-member.php" method="post" name="ringleaders-front-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" /> <!-- needed for gender display, but you can do it your way -->
                <div class="row">
                    <div class="like-label">Choose allowed font colours</div>
                    <div class="like-input colour-switch swatches">
                        <label for="colour1"><span class="colour <?php echoIfEqual('#000000', $colour, ' selected'); ?>" style="background-color: #000000"></span></label>
                        <input id="colour1" type="radio" name="colour" value="#000000"<?php echoIfEqual('#000000', $colour, ' checked'); ?>>
                        <label for="colour8"><span class="colour <?php echoIfEqual('#ffffff', $colour, ' selected'); ?>" style="background-color: #ffffff"></span></label>
                        <input id="colour8" type="radio" name="colour" value="#ffffff"<?php echoIfEqual('#ffffff', $colour, ' checked'); ?>>
                        <label for="colour2"><span class="colour <?php echoIfEqual('#2AA9E0', $colour, ' selected'); ?>" style="background-color: #2AA9E0"></span></label>
                        <input id="colour2" type="radio" name="colour" value="#2AA9E0"<?php echoIfEqual('#2AA9E0', $colour, ' checked'); ?>>
                        <label for="colour3"><span class="colour <?php echoIfEqual('#ED1F7A', $colour, ' selected'); ?>" style="background-color: #ED1F7A"></span></label>
                        <input id="colour3" type="radio" name="colour" value="#ED1F7A"<?php echoIfEqual('#ED1F7A', $colour, ' checked'); ?>>
                        <label for="colour7"><span class="colour <?php echoIfEqual('#880000', $colour, ' selected'); ?>" style="background-color: #880000"></span></label>
                        <input id="colour7" type="radio" name="colour" value="#880000"<?php echoIfEqual('#880000', $colour, ' checked'); ?>>
                        <label for="colour4"><span class="colour <?php echoIfEqual('#FF00FF', $colour, ' selected'); ?>" style="background-color: #FF00FF"></span></label>
                        <input id="colour4" type="radio" name="colour" value="#FF00FF"<?php echoIfEqual('#FF00FF', $colour, ' checked'); ?>>
                        <label for="colour5"><span class="colour <?php echoIfEqual('#C8C847', $colour, ' selected'); ?>" style="background-color: #C8C847"></span></label>
                        <input id="colour5" type="radio" name="colour" value="#C8C847"<?php echoIfEqual('#C8C847', $colour, ' checked'); ?>>
                        <label for="colour6"><span class="colour <?php echoIfEqual('#76A741', $colour, ' selected'); ?>" style="background-color: #76A741"></span></label>
                        <input id="colour6" type="radio" name="colour" value="#76A741"<?php echoIfEqual('#76A741', $colour, ' checked'); ?>>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <label for="front-text">Personalise name</label>
                    <input type="text" id="front-text" value="" placeholder="Big number" class="input">
                </div>
                <div class="row">
                    <div class="like-label">Choose allowed fonts</div>
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
                    <div class="like-label">Personalise options</div>
                    <div class="like-input block">
                        <input id="same" type="radio" name="personaliseOptions" value="" >
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
                    <button type="button" class="button"><i class="fa fa-fw"></i> Choose members</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Personalise%20The%20Front&view=front" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>