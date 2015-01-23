<?php

include_once('includes/fakedata.php');

$teamName = $fakeTeamArray[$_GET['teamId']];
$teamId = $_GET['teamId'];
$teamDescription = 'Cras in leo faucibus, consectetur lectus a, egestas ligula. Ut vel finibus est.';
$pageState = 'Edit';

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
                <h2>Edit order #<?php echo $_GET['teamId']; ?></h2>
                <a href="ringleaders-manage-orders.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <h3>#<?php echo $teamId; ?> / <?php echo $teamName; ?></h3>
                <ul>
                    <?php
                    foreach($fakeNamesArray as $member) {
                        echo "<li><a href='ringleaders-edit-member.php?teamId=" . $teamId . "&memberId=". $member['Id'] . "'>". $member['First Name'] . " " . $member['Last Name'] . " (" . $member['Percentage'] . ")</a></li>";
                    }
                    ?>
                </ul>
                <a href="ringleaders-add-member.php?teamId=<?php echo $teamId; ?>" class="button standalone-button"><i class="fa fa-fw"></i> Add new member</a>
            </div>

            <form class="form" id="" action="ringleaders-edit-order.php?teamId=<?php echo $teamId; ?>" method="post" name="" novalidate="novalidate">
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
                    <button type="button" class="button"><i class="fa fa-fw"></i> Update team</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Creating%20/%20Editing%20Yours%20Orders" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br/>
                    <a href="ringleaders-delete-order.php?id=<?php echo $teamId; ?>" class="button yellow-button"><i class="fa fa-fw"></i> Delete team</a><br />
                    <a href="members-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>