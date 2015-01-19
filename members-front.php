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

$mensImage = "garment-mens-front.jpg";
$womensImage = "garment-womens-front.jpg";
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
                <div id="garment-display" data-gender-mens="<?php echo $mensImage; ?>" data-gender-womens="<?php echo $womensImage; ?>" class="display front preset">
                    <span class="figure small <?php echo $position; ?>" data-figure="name" style="color: <?php echo $colour; ?>; font-family: '<?php echo $nameStyle; ?>';">
                        XXXX
                    </span>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="personalise-front-form" action="members-back.php" method="post" name="personalise-front-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" /> <!-- needed for gender display -->
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