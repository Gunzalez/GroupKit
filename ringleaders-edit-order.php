<?php
include_once('includes/fakedata.php');

$teamName = $fakeTeamArray[$_GET['teamId']]['name'];
$teamId = $_GET['teamId'];
$teamDescription = 'Cras in leo faucibus, consectetur lectus a, egestas ligula. Ut vel finibus est.';

$memberId = '';
if(isset($_GET['memberId'])) {
    $memberId = $_GET['memberId'];
}

?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders edit order</title>
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
                <?php if( $teamId == '111'){ ?>
                    <?php if($memberId == 'new'){ ?>
                        <p>Click on a member name for full details, where you can edit details or remind them about their garment.</p>
                        <ul>
                            <li><a href="ringleaders-edit-member.php?teamId=<?php echo $teamId; ?>">New MemberName (0%)</a></li>
                        </ul>
                    <?php } else { ?>
                        <p>There are no members for this team yet.</p>
                    <?php } ?>
                <?php } else { ?>
                    <p>Click on a member name for full details, where you can edit details or remind them about their garment.</p>
                    <ul>
                        <?php
                        foreach($fakeNamesArray as $member) {
                            echo "<li><a href='ringleaders-edit-member.php?teamId=" . $teamId . "&memberId=". $member['Id'] . "'>". $member['First Name'] . " " . $member['Last Name'] . " (" . $member['Percentage'] . ")</a></li>";
                        }
                        ?>
                    </ul>
                <?php } ?>
                <a href="ringleaders-add-member.php?teamId=<?php echo $teamId; ?>" class="button standalone-button"><i class="fa fa-fw"></i> Add new member</a>
            </div>

            <form class="form" id="" action="ringleaders-edit-order.php?teamId=<?php echo $teamId; ?>" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="team-name">Team name</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $teamName; ?></span>
                    </div>
                    <input type="text" id="team-name" name="team-name" value="<?php echo $teamName; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="team-description">Description</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $teamDescription; ?></span>
                    </div>
                    <textarea id="team-description" name="team-description" class="input edit-mode display-none"><?php echo $teamDescription; ?></textarea>
                </div>
                <div class="row button-row edit-mode display-none">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Update team</button>
                </div>
                <div class="row button-row">
                    <a href="#" class="button read-only-mode" id="editable"><i class="fa fa-fw"></i> Click to edit</a>
                    <a href="#" class="button edit-mode display-none white-button" id="nonEditable"><i class="fa fa-fw"></i> Cancel edit</a>
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