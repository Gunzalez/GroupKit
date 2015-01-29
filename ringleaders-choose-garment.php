<?php
session_start();

if(!isset($_SESSION["gender"])){
    $_SESSION["gender"] = 'womens';
}
if(!isset($_SESSION["colour"])){
    $_SESSION["colour"] = '#000000';
}
if(!isset($_SESSION["size"])){
    $_SESSION["size"] = 'nil';
}
if(!isset($_SESSION["position"])){
    $_SESSION["position"] = 'left';
}
if(!isset($_SESSION["nameStyle"])){
    $_SESSION["nameStyle"] = 'signikabold';
}
if(!isset($_SESSION["numberStyle"])){
    $_SESSION["numberStyle"] = 'signikabold';
}

$gender = $_SESSION["gender"];
$colour = $_SESSION["colour"];
$size = $_SESSION["size"];

$mensImage = "garment-mens-front.jpg";
$womensImage = "garment-womens-front.jpg";

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders choose garment</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Choose your garment</h2>
                <a href="index.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" data-gender-mens="<?php echo $mensImage; ?>" data-gender-womens="<?php echo $womensImage; ?>" class="display preset">
                    &nbsp;
                </div>
                <div class="gender-switch switch">
                    <a href="#" class="button white-button<?php echoIfEqual('womens', $gender, ' selected'); ?>" data-gender="womens">Womens</a>
                    <a href="#" class="button white-button<?php echoIfEqual('mens', $gender, ' selected'); ?>" data-gender="mens">Mens</a>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <form class="form" id="choose-garment-form" action="ringleaders-personalise-front.php" method="post" name="choose-garment-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" />
                <div class="row">
                    <label for="size">Garment size</label>
                    <select id="size" name="size" class="select" tabindex="1">
                        <option value="nil"<?php echoIfEqual('nil', $size, ' selected="selected"'); ?>>Select a size</option>
                        <option value="09"<?php echoIfEqual('09', $size, ' selected="selected"'); ?>>9</option>
                        <option value="10"<?php echoIfEqual('10', $size, ' selected="selected"'); ?>>10</option>
                        <option value="11"<?php echoIfEqual('11', $size, ' selected="selected"'); ?>>11</option>
                        <option value="12"<?php echoIfEqual('12', $size, ' selected="selected"'); ?>>12</option>
                    </select>
                    <p class="info">To fit chest:<br/>
                        <span class="size-info">Ipsum gentrul gway farts.</span>
                    </p>
                </div>
                <div class="row">
                    <div class="like-label">Garment colour</div>
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
                <div class="row">
                    <div class="like-label">Colour selection</div>
                    <div class="like-input">
                        <input type="checkbox" id="colour-selection" type="radio" name="colour-selection" value="Allow">
                    </div>
                    <p class="info"><label for="colour-selection">Tick this box to allow members pick their own colours</label></p>
                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Personalise the front</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Choose%20Your%20Garment" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>