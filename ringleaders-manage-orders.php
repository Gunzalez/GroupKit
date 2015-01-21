<?php include_once('includes/fakedata.php'); ?>
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
                <p><a href="ringleaders-edit-order.php">Create a new order</a> or manage an existing one from the list.</p>
                <p>Remember you can remind teammates about their order and you can also pay for items on their behalf, either individually or all together.</p>
                <a href="ringleaders-new-order.php" class="button standalone-button"><i class="fa fa-fw"></i> Create new team</a>
            </div>

            <div class="like-form">
                <table border="0" cellspacing="0" cellpadding="0" summary="Order table" class="orders-list">
                    <tr>
                        <th scope="col" class="order-name"># Order / Team</th>
                        <th scope="col" class="order-date">Date</th>
                        <th scope="col" class="order-status">Status</th>
                    </tr>

                    <?php
                    foreach($fakeTeamArray as $team => $details) {
                        echo "<tr data-order-id=". $team  .">";
                        echo "<td class='order-name'>#" . $team  . "&nbsp;/&nbsp;" . $details  . "</td>";
                        echo "<td class='order-date'>09/11/2014</td>";
                        echo "<td class='order-status'>90%</td>";
                        echo "</tr>";
                    }
                    ?>

<!--                    <tr data-order-id="131" class="odd">-->
<!--                        <td class="order-name">131&nbsp;/ Coke Zero</td>-->
<!--                        <td class="order-date">09/11/2014</td>-->
<!--                        <td class="order-status">90%</td>-->
<!--                    </tr>-->
                </table>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Managing%20Your%20Orders" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                </div>
            </div>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>