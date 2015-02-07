<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders register</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Create account</h2>
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>

            <?php if(isset($_GET['pay']) && $_GET['pay'] == 'all'){ ?>

                <div class="showcase">
                    <h3>New Ringleader Account</h3>
                    <p>Oh dear, you have chosen to pay for all members, are you sure you can afford it?</p>
                    <p>You'll require a fat bank account, and I mean with lots of money not just the size of the vault, or just wealthy parents.</p>
                </div>

            <?php } else { ?>

                <div class="showcase">
                    <h3>New Ringleader Account</h3>
                    <p>Good move, ain't no way you're paying for those fools, you're not Richard Branson!</p>
                    <p>You will need knuckle dusters, chloroform some duct tape and a hitman, preferably from Malaysia, oh and nerves of steel.</p>
                </div>

            <?php } ?>

            <form class="form" id="create-account" action="huh.php" method="post" name="create-account" novalidate="novalidate">
                <div class="row">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="email2">Confirm email</label>
                    <input type="email" name="email2" id="email2" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="sms">SMS</label>
                    <input type="tel" name="sms" id="sms" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" class="input"  />
                </div>
                <div class="row">
                    <label for="password2">Confirm password</label>
                    <input type="password" name="password2" id="password2" value="" class="input"  />
                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Create account</button>
                </div>
                <div class="cleft"></div>
                <div class="helpers">
                    <a href="ringleaders-start-over-new.php"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>