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

if(isset($_GET['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']]['name'];
    $teamId = $_GET['teamId'];
} else if(isset($_POST['teamId'])) {
    $teamName = $fakeTeamArray[$_GET['teamId']]['name'];
    $teamId = $_GET['teamId'];
}

$memberId = '';
$memberFirstName = 'New';
$memberLastName = 'MemberName';
$memberEmail = 'new.membername@emailadd.com';
$memberPhone = '0208973881';
$garmentName = 'MemberName';
$garmentNumber = '00';

if(isset($_GET['memberId']) && $_GET['memberId'] != '') {
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
    <title>Group Kit - Ringleaders edit members</title>
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
                <p>Click on a member name for full details, where you can edit details or remind them about their garment.</p>
                <?php if( $teamId == '111'){ ?>
                    <ul>
                        <li class="selected"><a href="ringleaders-edit-member.php?teamId=<?php echo $teamId; ?>">New MemberName (0%)</a></li>
                    </ul>
                <?php } else { ?>
                    <ul>
                        <?php
                        foreach($fakeNamesArray as $member) {
                            echo "<li". returnIfEqual($member['Id'], $memberId, ' class="selected"') . "><a href='ringleaders-edit-member.php?teamId=" . $teamId . "&memberId=" . $member['Id'] . "'>". $member['First Name'] . " " . $member['Last Name'] . " (" . $member['Percentage'] . ")</a></li>";
                        }
                        ?>
                    </ul>
                <?php } ?>
                <a href="ringleaders-add-member.php?teamId=<?php echo $teamId; ?>" class="button standalone-button"><i class="fa fa-fw"></i> Add new member</a>
            </div>

            <form class="form" id="" action="ringleaders-edit-member.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="memberId" name="memberId" value="<?php echo $memberId; ?>" />
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="first-name">First name</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $memberFirstName; ?></span>
                    </div>
                    <input type="text" id="first-name" name="first-name" value="<?php echo $memberFirstName; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="last-name">Last name</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $memberLastName; ?></span>
                    </div>
                    <input type="text" id="last-name" name="last-name" value="<?php echo $memberLastName; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="email">Email address</label>
                    <div class="like-input read-only-mode ellipsis">
                        <span class="value"><?php echo $memberEmail; ?></span>
                    </div>
                    <input type="email" id="email" name="email" value="<?php echo $memberEmail; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="phone">Phone</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $memberPhone; ?></span>
                    </div>
                    <input type="number" id="phone" name="phone" value="<?php echo $memberPhone; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="garment-name">name 1</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $garmentName; ?></span>
                    </div>
                    <input type="text" id="garment-name" name="garment-name" value="<?php echo $garmentName; ?>" class="input edit-mode display-none" />
                </div>
                <div class="row">
                    <label for="garment-number">Big number</label>
                    <div class="like-input read-only-mode">
                        <span class="value"><?php echo $garmentNumber; ?></span>
                    </div>
                    <input type="text" id="garment-number" name="garment-number" maxlength="5" value="<?php echo $garmentNumber; ?>" class="input short-input edit-mode display-none" />
                </div>

                <div class="row button-row edit-mode display-none">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Update details</button>
                </div>
                <div class="row button-row">
                    <a href="#" class="button read-only-mode" id="editable"><i class="fa fa-fw"></i> Click to edit</a>
                    <a href="#" class="button edit-mode display-none white-button" id="nonEditable"><i class="fa fa-fw"></i> Cancel edit</a>
                </div>

                <div class="row button-row">
                    <div class="links">
                        <!-- states -->

<!--                        <button type="button" class="button disabled-button" disabled="disabled"><i class="fa fa-fw"></i> Payment made</button>-->

<!--                        <a href="#" class="button"><i class="fa fa-fw"></i> Pay for member</a>-->
<!--                        <a href="#" class="button"><i class="fa fa-fw"></i> Remind member</a>-->

                        <a href="#" class="button"><i class="fa fa-fw"></i> Pay for member</a>
                        <a href="#" class="button bottom-button"><i class="fa fa-fw"></i> Reminded</a>
                        <p class="info reminded-text">Last reminded #00/00/2015#</p>

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
                        <a href="ringleaders-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
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