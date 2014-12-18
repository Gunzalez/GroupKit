<!doctype html>
<html>
<head>
    <title>Group Kit - Members confirm and pay</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner garment-selection">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Confirm and pay</h2>
                <a href="members-back.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <?php
            function echoIfEqual($val1, $val2, $str){
                if($val1 == $val2){
                    echo $str;
                }
            }


            session_start();
            if(isset($_POST['numberStyle'])){
                $_SESSION["numberStyle"] = $_POST['numberStyle'];
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

            <form class="form" id="choose-garment-form" action="#" method="post" name="choose-garment-form" novalidate="novalidate">
                <div style="height: 180px">
                    <p>There are no PSDs or wire-frames for the page</p>
                </div>
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