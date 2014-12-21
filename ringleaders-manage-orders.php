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
                <a href="ringleaders-sign-in.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <div class="showcase">
                <p>Welcome back #Mr Rob Curle#,</p>
                <p><a href="ringleaders-order-detail.php">Create a new order</a> or manage and existing on from the list.</p>
                <p>Remember you can remind teammates about their order and you can also pay for items on their behalf, either individually or all together.</p>
            </div>

            <div class="like-form">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" summary="Order table" class="orders-list">
                    <caption>Your orders</caption>
                    <tr>
                        <th scope="col" class="order-name">Order No / Team name</th>
                        <th scope="col" class="order-date">Date</th>
                        <th scope="col" class="order-status">Status</th>
                    </tr>
                    <tr data-order-id="131" class="odd">
                        <td class="order-name">131&nbsp;/ Coke Zero</td>
                        <td class="order-date">09/11/2014</td>
                        <td class="order-status">90%</td>
                    </tr>
                    <tr data-order-id="023" class="even">
                        <td class="order-name">023&nbsp;/ Tigers</td>
                        <td class="order-date">23/10/2014</td>
                        <td class="order-status">20%</td>
                    </tr>
                    <tr data-order-id="109" class="odd">
                        <td class="order-name">109&nbsp;/ Go&nbsp;Ritchie&nbsp;Go!</td>
                        <td class="order-date">19/10/2014</td>
                        <td class="order-status">30%</td>
                    </tr>
                    <tr data-order-id="210" class="even">
                        <td class="order-name">210&nbsp;/ Wedding</td>
                        <td class="order-date">05/09/2014</td>
                        <td class="order-status">100%</td>
                    </tr>
                    <tr data-order-id="419" class="odd">
                        <td class="order-name">109&nbsp;/ LongOrderName...</td><!-- TODO. Rob, figured you might want to truncate, just incase. If so, do it in PHP, I tried CSS but difficult in a table cell, 25 characters in total I count  -->
                        <td class="order-date">09/11/2014</td>
                        <td class="order-status">75%</td>
                    </tr>
                </table>
                <div class="row button-row">
                    <a href="ringleaders-order-detail.php" class="button standalone-button">Create new order</a>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Managing%20Your%20Orders" class="button white-button">Help with this page</a>
                </div>
            </div>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>