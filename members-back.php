<!doctype html>
<html>
<head>
    <title>Group Kit - Members personalise the back</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Personalise the back</h2>
                <a href="members-front.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <?php
            function echoIfEqual($val1, $val2, $str){
                if($val1 == $val2){
                    echo $str;
                }
            }


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
            ?>

            <div class="showcase">
                <div id="garment-display" class="display back <?php echo $gender; ?>">
                    <span class="figure small" data-figure="name" style="color: <?php echo $colour; ?>; font-family: '<?php echo $nameStyle; ?>';">
                        XXXX
                    </span>
                    <span class="figure big" data-figure="number" style="color: <?php echo $colour; ?>; font-family: '<?php echo $numberStyle; ?>';">
                        10
                    </span>
                </div>
            </div>

            <form class="form" id="choose-garment-form" action="members-confirm.php" method="post" name="choose-garment-form" novalidate="novalidate">
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
                    <div class="like-label">Number style</div>
                    <div class="like-input style-switch block">
                        <input id="style4" type="radio" name="numberStyle" value="signikabold"<?php echoIfEqual('signikabold', $numberStyle, ' checked'); ?>>
                        <label for="style4">Signika Bold</label><br />
                        <input id="style1" type="radio" name="numberStyle" value="Verdana"<?php echoIfEqual('Verdana', $numberStyle, ' checked'); ?>>
                        <label for="style1">Verdana</label><br />
                        <input id="style2" type="radio" name="numberStyle" value="Arial"<?php echoIfEqual('Arial', $numberStyle, ' checked'); ?>>
                        <label for="style2">Some-long FontName</label><br />
                        <input id="style3" type="radio" name="numberStyle" value="Century Gothic"<?php echoIfEqual('Century Gothic', $numberStyle, ' checked'); ?>>
                        <label for="style3">Century Gothic</label>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Number</div>
                    <div class="like-input">
                        <span class="chosen-name big" style="color: <?php echo $colour; ?>">10</span>
                        <p>This is the number selected by your Ringleader.</p>
                    </div>
                </div>


                <div class="row button-row">
                    <input type="submit" value="Confirm and pay" class="button" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-help.php?topic=Personalise%20The%20Back" class="button white-button">Help with this page</a><br />
                    <a href="members-start-over.php" class="button white-button">Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>