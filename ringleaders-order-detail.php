<?php
$fakeTeamArray = array(
    "131" => "Coke Zero",
    "023" => "Tigers",
    "109" => "Go Ritchie Go!",
    "210" => "Wedding",
    "419" => "LongOrderNameLong OrderName",
    "111" => "NewTeamName"
);

$teamName = '';
$teamId = 'new';
$teamDescription = '';
$pageState = 'Create';

if(isset($_GET['id'])) {
    $teamName = $fakeTeamArray[$_GET['id']];
    $teamId = $_GET['id'];
    $teamDescription = 'Cras in leo faucibus, consectetur lectus a, egestas ligula. Ut vel finibus est.';
    $pageState = 'Edit';
}
?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders <?php echo $pageState; ?> Order</title>
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
                    <h2>Edit order #<?php echo $_GET['id']; ?></h2>
                <?php
                } else {
                    ?>
                    <h2>Create new order</h2>
                <?php
                }
                ?>
                <a href="ringleaders-manage-orders.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <?php
                if(isset($_GET['id'])){
                    ?>
                    <h3><?php echo $teamName; ?></h3>
                    <p>Admin - add/edit/remove members and garments for this team.</p>
                    <a href="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>" class="button standalone-button">Team members</a><br />
                    <a href="ringleaders-team-garments.php?teamId=<?php echo $teamId; ?>" class="button standalone-button">Admin team garment</a>
                <?php
                } else {
                    ?>
                    <p>Details on how to create an order</p>
                <?php
                }
                ?>
            </div>

            <form class="form" id="" action="ringleaders-do-detail.php" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="team-name">Team name</label>
                    <input type="text" id="team-name" name="team-name" value="<?php echo $teamName; ?>" class="input" />
                </div>
                <div class="row">
                    <label for="team-description">Description</label>
                    <textarea id="team-description" name="team-description" class="input"><?php echo $teamDescription; ?></textarea>
                </div>
                <div class="row button-row">
                    <?php
                    if(isset($_GET['id'])){
                        ?>
                        <input type="submit" value="Update team" class="button" />
                    <?php
                    } else {
                        ?>
                        <input type="submit" value="Save team" class="button" />
                    <?php
                    }
                    ?>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Creating%20/%20Editing%20Yours%20Orders" class="button white-button">Help with this page</a>
                    <?php
                    if(isset($_GET['id'])){
                        ?>
                        <br/>
                        <a href="ringleaders-delete-order.php?id=<?php echo $teamId; ?>" class="button yellow-button">Delete order</a>
                    <?php
                    }
                    ?>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>