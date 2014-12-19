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
                <a href="members-choose.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" class="display front <?php echo $gender; ?>">
                    <span class="figure small <?php echo $position; ?>" data-figure="name" style="color: <?php echo $colour; ?>; font-family: '<?php echo $nameStyle; ?>';">
                        XXXX
                    </span>
                </div>
            </div>

            <form class="form" id="choose-garment-form" action="members-back.php" method="post" name="choose-garment-form" novalidate="novalidate">
                <!--
                TODO:
                Why is this repeated in PSD, you can uncomment if you want

                <div class="row">
                    <div class="like-label">Choose your colour</div>
                    <div class="like-input colour-switch swatches">
                        <label for="colour1"><span class="colour colour1"></span></label>
                        <input id="colour1" type="radio" name="colour" value="#000000"<?php echoIfEqual('#000000', $colour, ' checked'); ?>>
                        <label for="colour2"><span class="colour colour2"></span></label>
                        <input id="colour2" type="radio" name="colour" value="#2AA9E0"<?php echoIfEqual('#2AA9E0', $colour, ' checked'); ?>>
                        <label for="colour3"><span class="colour colour3"></span></label>
                        <input id="colour3" type="radio" name="colour" value="#ED1F7A"<?php echoIfEqual('#ED1F7A', $colour, ' checked'); ?>>
                    </div>
                </div>
                //-->
                <div class="row">
                    <div class="like-label">Position</div>
                    <div class="like-input position-switch">
                        <input id="left" type="radio" name="position" value="left"<?php echoIfEqual('left', $position, ' checked'); ?>>
                        <label for="left">Left chest</label>
                        <input id="right" type="radio" name="position" value="right"<?php echoIfEqual('right', $position, ' checked'); ?>>
                        <label for="right">Right chest</label>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Name style</div>
                    <div class="like-input style-switch block">
                        <input id="style4" type="radio" name="nameStyle" value="signikabold"<?php echoIfEqual('signikabold', $nameStyle, ' checked'); ?>>
                        <label for="style4">Signika Bold</label><br />
                        <input id="style1" type="radio" name="nameStyle" value="Verdana"<?php echoIfEqual('Verdana', $nameStyle, ' checked'); ?>>
                        <label for="style1">Verdana</label><br />
                        <input id="style2" type="radio" name="nameStyle" value="Arial"<?php echoIfEqual('Arial', $nameStyle, ' checked'); ?>>
                        <label for="style2">Some-long FontName</label><br />
                        <input id="style3" type="radio" name="nameStyle" value="Century Gothic"<?php echoIfEqual('Century Gothic', $nameStyle, ' checked'); ?>>
                        <label for="style3">Century Gothic</label>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Name</div>
                    <div class="like-input">
                        <span class="chosen-name" style="color: <?php echo $colour; ?>">Coke Zero</span>
                        <p>This is the name selected by your Ringleader.</p>
                    </div>
                </div>


                <div class="row button-row">
                    <input type="submit" value="Personalise the back" class="button" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Personalise%20The%20Front&view=front" class="button white-button">Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button">Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>