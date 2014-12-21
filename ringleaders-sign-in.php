<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders sign in</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title form-heading">
                <h2>Ringleaders sign in</h2>
                <a href="index.php" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>

            <form class="form" id="ringleaders-sign-in-form" action="ringleaders-manage-orders.php" method="post" name="ringleaders-sign-in-form" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" tabindex="1" />
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" class="input" tabindex="2" />
                </div>
                <div class="row button-row">
                    <input type="submit" value="Sign in" class="button" tabindex="3" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
            </form>

            <h3 class="form-subheading">Forgotten your password?</h3>
            <form class="form" id="ringleaders-forgot-password" action="" method="post" name="ringleaders-forgot-password" novalidate="novalidate">
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" value="" class="input" tabindex="4" />
                </div>
                <div class="row button-row">
                    <input type="submit" value="Help, I forgot" class="button" tabindex="5" />
                </div>
                <div class="cleft"></div>
            </form>

            <div class="title form-heading">
                <h2>...Or create an account</h2>
                <div class="cboth"></div>
            </div>
            <form class="form last-element" id="create-account" action="ringleaders-welcome.php" method="post" name="create-account" novalidate="novalidate">
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
                    <input type="submit" value="Create account" class="button"  />
                </div>
                <div class="cleft"></div>
            </form>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>