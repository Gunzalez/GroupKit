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

function echoIfEqual($val1, $val2, $str){
    if($val1 == $val2){
        echo $str;
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
                <h2>Team members</h2>
                <a href="ringleaders-order-detail.php?id=<?php echo $teamId; ?>" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>
            <div class="showcase">
                <h3>#<?php echo $teamId; ?> / <?php echo $teamName; ?></h3>
                <ul>
                    <li<?php echoIfEqual('1', $memberId, ' class="selected"'); ?>><a href="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>&memberId=1">Michael Jackson</a></li>
                    <li<?php echoIfEqual('2', $memberId, ' class="selected"'); ?>><a href="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>&memberId=2">Jim Caviezel</a></li>
                    <li<?php echoIfEqual('3', $memberId, ' class="selected"'); ?>><a href="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>&memberId=3">Rob Curle</a></li>
                </ul>
                <?php
                if(isset($_GET['memberId'])){
                    ?>
                    <a href="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>" class="button standalone-button"><i class="fa fa-fw"></i> Add new member</a>
                <?php
                }
                ?>
            </div>

            <form class="form" id="" action="ringleaders-choose-members.php?teamId=<?php echo $teamId; ?>&memberId=1" method="post" name="" novalidate="novalidate">
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
                <div class="row">
                    <label for="garment-name">Garment name</label>
                    <input type="text" id="garment-name" name="garment-name" value="<?php echo $garmentName; ?>" class="input" />
                </div>
                <div class="row">
                    <label for="garment-number">Big number</label>
                    <input type="text" id="garment-number" name="garment-number" maxlength="4" style="width: 50px;" value="<?php echo $garmentNumber; ?>" class="input" />
                    <p class="info">Unique Personalisation Number</p>
                </div>
                <div class="row button-row">
                    <?php
                    if(isset($_GET['memberId'])){
                        ?>
                        <button type="button" class="button"><i class="fa fa-fw"></i> Update member</button>
                        <div class="links">
                            <a href="ringleaders-choose-garment.php?teamId=<?php echo $teamId; ?>&memberId=<?php echo $memberId; ?>" class="button"><i class="fa fa-fw"></i> Edit Member's Garment</a>
                        </div>
                    <?php
                    } else {
                        ?>
                        <button type="button" class="button"><i class="fa fa-fw"></i> Add member</button>
                    <?php
                    }
                    ?>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Admin%20Members" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                    <?php
                    if(isset($_GET['memberId'])){
                        ?>
                        <br/>
                        <a href="ringleaders-delete-member.php?id=<?php echo $memberId; ?>" class="button yellow-button"><i class="fa fa-fw"></i> Delete member</a>
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