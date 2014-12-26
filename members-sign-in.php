<!doctype html>
<html>
<head>
    <title>Group Kit - Members sign in</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title form-heading">
                <h2>Members sign in</h2>
                <a href="index.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <form class="form" id="member-sign-in-form" action="members-start-over.php" method="post" name="members-sign-in-form" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" tabindex="1" />
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" class="input" tabindex="2" />
                </div>
                <div class="row button-row">
                    <button type="button" class="button" tabindex="3"><i class="fa fa-fw"></i> Sign in</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
            </form>

            <h3 class="form-subheading">Forgotten your password?</h3>
            <form class="form last-element" id="members-forgot-password" action="" method="post" name="members-forgot-password" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" tabindex="4" />
                </div>
                <div class="row button-row">
                    <button type="button" class="button" tabindex="5"><i class="fa fa-fw"></i> Help, I forgot</button>
                </div>
                <div class="cleft"></div>
            </form>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>