<?php
$fakeTeamArray = array(
    "131" => "Coke Zero",
    "023" => "Tigers",
    "109" => "Go Ritchie Go!",
    "210" => "Wedding",
    "419" => "LongOrderNameLong OrderName",
    "111" => "NewTeamName"
);

if(isset($_GET['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']];
    $teamId = $_GET['teamId'];
}
?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders Choose Team Garment</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Team Garment</h2>
                <a href="ringleaders-edit-order.php?id=<?php echo $teamId; ?>" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>
            <div class="showcase">
                <h3>#<?php echo $teamId; ?> / <?php echo $teamName; ?></h3>
            </div>

            <form class="form" id="" action="ringleaders-add-member.php?teamId=<?php echo $teamId; ?>&memberId=1" method="post" name="" novalidate="novalidate">

                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="first-name">Logo?</label>
                    <input type="text" id="first-name" name="first-name" value="" class="input" />
                </div>
                <div style="height: 200px"></div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Edit team garment</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Admin%20Members" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>