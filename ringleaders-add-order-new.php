<?php
session_start();

if(isset($_POST['colour'])){
    $_SESSION["back-font-colour"] = $_POST['colour'];
}

if(isset($_POST["nameStyle"])){
    $_SESSION["numberStyle"] = $_POST["nameStyle"];
}
?>

<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders new order</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>New order/team</h2>
                <a href="ringleaders-personalise-back.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <h3>#<span class="new-team">new team</span></h3>
                <p>There are no members for this team yet.</p>
            </div>

            <form class="form" id="" action="ringleaders-add-member-new.php" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="teamId" name="teamId" value="" />
                <div class="row">
                    <label for="team-name">Team name</label>
                    <input type="text" id="team-name" name="team-name" value="" class="input" />
                </div>
                <div class="row">
                    <label for="team-description">Description</label>
                    <textarea id="team-description" name="team-description" class="input"></textarea>
                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Save details</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Creating%20/%20Editing%20Yours%20Orders" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-start-over-new.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>