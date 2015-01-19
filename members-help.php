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
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It survived not only five centuries...</p>
                </div>
            </div>

            <div class="like-form">
                <div style="min-height: 180px">
                    <h3><?php echo $_GET['topic']; /* Or make up some more helpful title based on topic */ ?></h3>
                    <p>Ipm struff in hesum strur tabelsum struff in her tam struff in her tabelbelt ennis</p>
                </div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="members-start-over.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a><br />
                    <a href="members-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </div>
            <div class="cboth"></div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>