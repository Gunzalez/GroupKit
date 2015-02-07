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
                <h2>Create an account</h2>
                <div class="cboth"></div>
            </div>
            <form class="form last-element" id="create-account" action="_old-stuff/ringleaders-welcome.php" method="post" name="create-account" novalidate="novalidate">
                <div class="row">
                    <p>Etiam nisi erat, egestas eget interdum ut, finibus id odio.  Nulla varius malesuada magna, us malesuut  X gonna give it to you! rhoncus odio facilisis non. </p>
                </div>
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
            </form>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>