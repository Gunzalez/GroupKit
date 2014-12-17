<!doctype html>
<html>
<head>
    <title>Group Kit- Members sign in</title>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/groupkit.css">
</head>
<body class="members-sign-in">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Members sign in</h2>
                <a href="#" class="button back-button">Back</a>
                <div class="cboth"></div>
            </div>

            <form class="form" id="member-sign-in-form" action="" method="post" name="members-sign-in-form" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" />
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" class="input" />
                </div>
                <div class="row button-row">
                    <input type="submit" value="Sign in" class="button" />
                </div>
                <div class="cleft"></div>
            </form>

            <h3>Forgotten your password?</h3>
            <form class="form" id="forgot-password" action="" method="post" name="forgot-password" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" />
                </div>
                <div class="row button-row">
                    <input type="submit" value="Submit" class="button" />
                </div>
                <div class="cleft"></div>
            </form>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>