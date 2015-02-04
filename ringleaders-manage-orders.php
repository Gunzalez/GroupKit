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

?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Manage your orders</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Manage your orders</h2>
                <a href="ringleaders-sign-in.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <p>Welcome back #Mr Rob Curle#,</p>
                <p><a href="ringleaders-add-order.php">Create a new team</a> or manage an existing one from the list.</p>
                <p>Remember you can remind teammates about their order and you can also pay for items on their behalf, either individually or all together.</p>
                <a href="ringleaders-add-order.php" class="button standalone-button"><i class="fa fa-fw"></i> Create new team</a>
            </div>

            <div class="like-form">
                <table border="0" cellspacing="0" cellpadding="0" summary="Order table" class="orders-list">
                    <tr>
                        <th scope="col" class="order-name"># Order / Team</th>
                        <th scope="col" class="order-date">Date</th>
                        <th scope="col" class="order-status">Status</th>
                    </tr>
                    <?php
                    foreach($fakeTeamArray as $team => $detail) {
                        echo "<tr data-order-id=". $team  .">";
                        echo "<td class='order-name'>#" . $team  . "&nbsp;/&nbsp;" . $detail['name']  . "</td>";
                        echo "<td class='order-date'>09/11/2014</td>";
                        echo "<td class='order-status'>" . $detail['percentage']  . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Managing%20Your%20Orders" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-log-out.php" class="button yellow-button"><i class="fa fa-fw"></i> Log out</a>
                </div>
            </div>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>