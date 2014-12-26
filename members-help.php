<?php
session_start();
$gender = 'womens';
if(isset($_SESSION['gender'])){
    $gender = $_SESSION['gender'];
}

$view = 'back';
if(isset($_GET['view'])){
    $view  = $_GET['view'];
}
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Members help</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Members help</h2>
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?> " class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" class="display <?php echo $view; ?> <?php echo $gender; ?>">
                    <!--
                    Maybe you name and/or number here for better UX, copy from other pages.
                    Depends on if you're using sessions I guess
                    -->
                </div>
            </div>

            <div class="like-form">
                <div style="min-height: 180px">
                    <h3><?php echo $_GET['topic']; /* Or make up some more helpful title based on topic */ ?></h3>
                    <p>Ipm struff in hesum strur tabelsum struff in her tam struff in her tabelbelt ennis</p>
                </div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </div>
            <div class="cboth"></div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>