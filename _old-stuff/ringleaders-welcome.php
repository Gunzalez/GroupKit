<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders welcome</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Ringleaders welcome</h2>
                <a href="../ringleaders-sign-in.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <p>Welcome to your Orders! With advanced features of activating account and new login widgets, you will definitely have a great experience of using GroupKit, it's pure dynamite!</p>
                <p><a href="../ringleaders-edit-order.php">Create a new order</a>, once done you can -</p>
                <ul>
                    <li>Remind cheap teammates about their orders</li>
                    <li>Pay for items on their behalf, either individually or all the fools together</li>
                    <li>Wear your underwear backwards</li>
                </ul>
                <a href="../ringleaders-new-order.php" class="button standalone-button"><i class="fa fa-fw"></i> Create new team</a>
            </div>

            <div class="like-form">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="Order table" class="orders-list">
                    <tr>
                        <th scope="col">Order No / Team name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                    <tr class="odd empty-list">
                        <td colspan="3">You currently have no teams to display.</td>
                    </tr>
                </table>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="../ringleaders-help.php?topic=Managing%20Your%20Orders" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a>
                </div>
            </div>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>