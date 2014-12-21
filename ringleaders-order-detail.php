<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders Create/Edit Order</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <?php
                if(isset($_GET['id'])){
                    ?>
                    <h2>Edit Order</h2>
                <?php
                } else {
                    ?>
                    <h2>Create New Order</h2>
                <?php
                }
                ?>
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <?php
                if(isset($_GET['id'])){
                    ?>
                    <h2>Full details for order <?php echo $_GET['id']; ?></h2>
                    <p>Probably some details on this order and a form on the right.</p>
                <?php
                } else {
                    ?>
                    <p>Details on how to create an order</p>
                    <p>A form on the right.</p>
                <?php
                }
                ?>
            </div>

            <form class="form" id="" action="" method="post" name="" novalidate="novalidate">
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row button-row">
                    <?php
                    if(isset($_GET['id'])){
                        ?>
                        <input type="submit" value="Update changes" class="button" />
                    <?php
                    } else {
                        ?>
                        <input type="submit" value="Save order" class="button" />
                    <?php
                    }
                    ?>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Creating%20/%20Editing%20Yours%20Orders" class="button white-button">Help with this page</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>