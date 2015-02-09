<?php
$fakeTeamArray = array(
    "131" => "Coke Zero",
    "023" => "Tigers",
    "109" => "Go Ritchie Go!",
    "210" => "Wedding",
    "419" => "LongOrderNameLong OrderName",
    "111" => "NewTeamName"
);

$fakeTeamArray = array(
    "131" => array(
        'name' => 'Coke Zero',
        'percentage' => '60%'
    ),
    "023" => array(
        'name' => 'Tigers',
        'percentage' => '100%'
    ),
    "109" => array(
        'name' => 'Go Ritchie Go!',
        'percentage' => '70%'
    ),
    "210" => array(
        'name' => 'Wedding',
        'percentage' => '70%'
    ),
    "419" => array(
        'name' => 'LongOrderNameLong OrderName',
        'percentage' => '90%'
    ),
    "111" => array(
        'name' => 'NewTeamName',
        'percentage' => '0%'
    )
);

$name1 = array(
    "First Name" => "Michael",
    "Last Name" => "Jackson",
    "Email" => "michael.jackson@neverland.com",
    "Phone" => "02088005708",
    "Garment Name" => "WackoJacko",
    "Garment Number" => "44",
    "Id" => '1',
    "Percentage" => '80%'
);
$name2 = array(
    "First Name" => "Jim",
    "Last Name" => "Caviezel",
    "Email" => "jim.caviezel@poi.com",
    "Phone" => "07857477012",
    "Garment Name" => "Mr Reiss",
    "Garment Number" => "20",
    "Id" => '2',
    "Percentage" => '60%'
);
$name3 = array(
    "First Name" => "Cristiano",
    "Last Name" => "Ronaldo",
    "Email" => "cristiano.ronaldo@realmadridrealmadridrealmadridrealmadridrealmadrid.com",
    "Phone" => "07857477012",
    "Garment Name" => "Ronaldo",
    "Garment Number" => "7",
    "Id" => '3',
    "Percentage" => '100%'
);
$name4 = array(
    "First Name" => "Rob",
    "Last Name" => "Curle",
    "Email" => "rob.curle@twelvenoon.com",
    "Phone" => "02084423026",
    "Garment Name" => "Curlers",
    "Garment Number" => "12",
    "Id" => '4',
    "Percentage" => '100%'
);
$name5 = array(
    "First Name" => "Tywin",
    "Last Name" => "Lannister",
    "Email" => "tywin.lannister@gameofthrones.com",
    "Phone" => "0906110560",
    "Garment Name" => "King's Hand",
    "Garment Number" => "19",
    "Id" => '5',
    "Percentage" => '0%'
);
$name6 = array(
    "First Name" => "Tony",
    "Last Name" => "Stark",
    "Email" => "tony.stark@starkenterprises.com",
    "Phone" => "07822551749",
    "Garment Name" => "Ironman",
    "Garment Number" => "99",
    "Id" => '6',
    "Percentage" => '101%'
);

$fakeNamesArray = array(
    "1" => $name1,
    "2" => $name2,
    "3" => $name3,
    "4" => $name4,
    "5" => $name5,
    "6" => $name6
);

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
                <div class="helpers">
                    <a href="ringleaders-delete-order.php?id=<?php echo $teamId; ?>"><i class="fa fa-fw"></i> Delete</a>
                    <a href="ringleaders-log-out.php"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </form>
            <div class="cboth"></div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>