<?php
$fakeTeamArray = array(
    "131" => "Coke Zero",
    "023" => "Tigers",
    "109" => "Go Ritchie Go!",
    "210" => "Wedding",
    "419" => "LongOrderNameLong OrderName",
    "111" => "New Team"
);

$teamName = '';
$teamId = 'new';
$teamDescription = '';

$memberFirstName = '';
$memberId = '';
$memberLastName = '';
$memberEmail = '';
$memberPhone = '';
$garmentName = '';
$garmentNumber = '';

$name1 = array(
    "First Name" => "Michael",
    "Last Name" => "Jackson",
    "Email" => "michael.jackson@neverland.com",
    "Phone" => "02088005708",
    "Garment Name" => "WackoJacko",
    "Garment Number" => "44"
);
$name2 = array(
    "First Name" => "Jim",
    "Last Name" => "Caviezel",
    "Email" => "jim.caviezel@poi.com",
    "Phone" => "07857477012",
    "Garment Name" => "Mr Reiss",
    "Garment Number" => "20"
);
$name3 = array(
    "First Name" => "Rob",
    "Last Name" => "Curle",
    "Email" => "rob.curle@twelvenoon.com",
    "Phone" => "0906110560",
    "Garment Name" => "Curlers",
    "Garment Number" => "12"
);

$fakeNamesArray = array(
    "1" => $name1,
    "2" => $name2,
    "3" => $name3
);

if(isset($_GET['memberId'])) {
    $memberId = $_GET['memberId'];
    $memberFirstName = $fakeNamesArray[$_GET['memberId']]["First Name"];
    $memberLastName = $fakeNamesArray[$_GET['memberId']]["Last Name"];
    $memberEmail = $fakeNamesArray[$_GET['memberId']]["Email"];
    $memberPhone = $fakeNamesArray[$_GET['memberId']]["Phone"];
    $garmentName = $fakeNamesArray[$_GET['memberId']]["Garment Name"];
    $garmentNumber = $fakeNamesArray[$_GET['memberId']]["Garment Number"];
}

if(isset($_GET['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']];
    $teamId = $_GET['teamId'];
}
?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders Choose Member's Garment</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Member garment</h2>
                <a href="../ringleaders-add-member.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <div id="garment-display" class="display womens">
                    <span class="figure big" style="color: rgb(0, 0, 0);">
                        XX
                    </span>
                </div>
            </div>

            <form class="form" id="" action="../huh.php" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <div class="like-label">Team</div>
                    <div class="like-input just-text">
                        #<?php echo $teamId; ?> / <?php echo $teamName; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Garment name</div>
                    <div class="like-input just-text">
                        <?php echo $garmentName; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="like-label">Garment number</div>
                    <div class="like-input just-text">
                        <?php echo $garmentNumber; ?>
                    </div>
                </div>
                <div style="height: 200px">

                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Save</button>
                    <div class="links">
                        <a href="../huh.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button"><i class="fa fa-fw"></i> Pay For Member</a><br />
                        <a href="ringleaders-edit-garment-old.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button"><i class="fa fa-fw"></i> Remind</a> <!-- TODO Rob, you can hide this button if member is 100% -->

                    </div>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="../ringleaders-help.php?topic=Editing%20Member%20Garments" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="../members-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>