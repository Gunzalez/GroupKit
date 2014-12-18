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
                <a href="members-sign-in.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <?php
            function echoIfEqual($val1, $val2, $str){
                if($val1 == $val2){
                    echo $str;
                }
            }



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
            ?>

            <div class="showcase">
                <div id="garment-display" class="display <?php echo $gender; ?>">
                    <span class="figure big" style="color: <?php echo $colour; ?>">
                        XX
                    </span>
                </div>
                <div class="gender-switch">
                    <a href="#" class="button white-button<?php echoIfEqual('womens', $gender, ' selected'); ?>" data-gender="womens">Womens</a>
                    <a href="#" class="button white-button<?php echoIfEqual('mens', $gender, ' selected'); ?>" data-gender="mens">Mens</a>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.It survived not only five centuries.</p>
                </div>
            </div>

            <form class="form" id="choose-garment-form" action="members-front.php" method="post" name="choose-garment-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" value="<?php echo $gender; ?>" />
                <div class="row">
                    <label for="size">Choose your size</label>
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
                <div class="row button-row">
                    <input type="submit" value="Personalise the front" class="button" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="#" class="button white-button">Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button">Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>