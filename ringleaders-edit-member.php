<?php

include_once('includes/fakedata.php');

if(isset($_GET['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']];
    $teamId = $_GET['teamId'];
} else if(isset($_POST['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']];
    $teamId = $_GET['teamId'];
}

$memberFirstName = '';
$memberId = '';
$memberLastName = '';
$memberEmail = '';
$memberPhone = '';
$garmentName = '';
$garmentNumber = '';

if(isset($_GET['memberId'])) {
    $memberId = $_GET['memberId'];
    $memberFirstName = $fakeNamesArray[$_GET['memberId']]["First Name"];
    $memberLastName = $fakeNamesArray[$_GET['memberId']]["Last Name"];
    $memberEmail = $fakeNamesArray[$_GET['memberId']]["Email"];
    $memberPhone = $fakeNamesArray[$_GET['memberId']]["Phone"];
    $garmentName = $fakeNamesArray[$_GET['memberId']]["Garment Name"];
    $garmentNumber = $fakeNamesArray[$_GET['memberId']]["Garment Number"];
}

function returnIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        return $str;
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders Choose Members</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Edit member</h2>
                <a href="ringleaders-edit-order.php?teamId=<?php echo $teamId; ?>" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>
            <div class="showcase">
                <h3>#<?php echo $teamId; ?> / <?php echo $teamName; ?></h3>
                <ul>
                    <?php
                    foreach($fakeNamesArray as $member) {
                        echo "<li". returnIfEqual($member['Id'], $memberId, ' class="selected"') . "><a href='ringleaders-edit-member.php?teamId=" . $teamId . "&memberId=" . $member['Id'] . "'>". $member['First Name'] . " " . $member['Last Name'] . " (" . $member['Percentage'] . ")</a></li>";
                    }
                    ?>
                </ul>
                <a href="ringleaders-add-member.php?teamId=<?php echo $teamId; ?>" class="button standalone-button"><i class="fa fa-fw"></i> Add new member</a>
            </div>

            <form class="form" id="" action="ringleaders-edit-order.php?teamId=<?php echo $teamId; ?>&memberId=1" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="memberId" name="memberId" value="<?php echo $memberId; ?>" />
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="first-name">First name</label>
                    <input type="text" id="first-name" name="first-name" value="<?php echo $memberFirstName; ?>" class="input" />
                </div>
                <div class="row">
                    <label for="last-name">Last name</label>
                    <input type="text" id="last-name" name="last-name" value="<?php echo $memberLastName; ?>" class="input" />
                </div>
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" value="<?php echo $memberEmail; ?>" class="input" />
                </div>
                <div class="row">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" value="<?php echo $memberPhone; ?>" class="input" />
                </div>
<!--                <div class="row">-->
<!--                    <label for="garment-name">Garment name</label>-->
<!--                    <input type="text" id="garment-name" name="garment-name" value="--><?php //echo $garmentName; ?><!--" class="input" />-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <label for="garment-number">Big number</label>-->
<!--                    <input type="text" id="garment-number" name="garment-number" maxlength="4" style="width: 50px;" value="--><?php //echo $garmentNumber; ?><!--" class="input" />-->
<!--                    <p class="info">Unique Personalisation Number</p>-->
<!--                </div>-->
                <div class="row button-row">


                    <button type="button" class="button"><i class="fa fa-fw"></i> Update details</button>
                    <div class="links">
                        <a href="ringleaders-edit-garment.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button"><i class="fa fa-fw"></i> Edit Garment</a>
                        <!-- <a href="ringleaders-edit-garment.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button"><i class="fa fa-fw"></i> Remind</a> TODO Rob, should this button even be here, should be on garment page. If you have to then you can hide this button if member is 100% -->
                    </div>

                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Admin%20Members" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                    <?php
                    if(isset($_GET['memberId'])){
                        ?>
                        <br/>
                        <a href="ringleaders-delete-member.php?id=<?php echo $memberId; ?>" class="button yellow-button"><i class="fa fa-fw"></i> Delete member</a><br />
                        <a href="members-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
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