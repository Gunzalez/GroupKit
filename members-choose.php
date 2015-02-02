<?php
session_start();

if(!isset($_SESSION["gender"])){
    $_SESSION["gender"] = 'womens';
}

if(!isset($_SESSION["colour"])){
    $_SESSION["colour"] = 'colour1';
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

$mensImage = "garment-mens-front-" . substr($colour, -1) . ".jpg";
$womensImage = "garment-womens-front-" . substr($colour, -1) . ".jpg";

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
    }
}
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members choose garment</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Choose your garment</h2>
                <a href="members-sign-in.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" data-gender-mens="<?php echo $mensImage; ?>" data-gender-womens="<?php echo $womensImage; ?>" class="display set-image">
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

            <form class="form" id="choose-garment-form" action="members-front.php" method="post" name="choose-garment-form" novalidate="novalidate">
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
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Personalise the front</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Choose%20Your%20Garment" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
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