<?php
$teamName = 'newName';
if(isset($_POST['team-name']) && $_POST['team-name'] != ''){
    $teamName = $_POST['team-name'];
}
$teamId = 'nil';
?>
<!doctype html>
<html>
<head>
    <title>Group Kit - Ringleaders choose members</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="page inner">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Add member</h2>
                <a href="ringleaders-add-order-new.php" class="button back-button white-button"><i class="fa fa-fw"></i> Back</a>
                <div class="cboth"></div>
            </div>
            <div class="showcase">
                <h3>#00/<?php echo $teamName; ?></h3>
                <?php if(isset($_GET['new-member']) && $_GET['new-member'] != ''){ ?>
                    <p>Click on a member name for full details, where you can edit details or remind them about their garment.</p>
                    <ul>
                        <li><a href="#">Alasdair Orr (0%)</a></li>
                    </ul>
                <?php } else { ?>
                    <p>There are no members for this team yet.</p>
                <?php } ?>
                <?php if(isset($_GET['new-member']) && $_GET['new-member'] != ''){ ?>
                    <div class="row button-row">
                        <div class="links">
                            <a href="ringleaders-register.php" class="button standalone-button"><i class="fa fa-fw"></i> Complete - I pay for all</a>
                            <a href="ringleaders-register.php" class="button standalone-button"><i class="fa fa-fw"></i> Complete - Members pay</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <form class="form" id="" action="ringleaders-add-member-new.php?new-member=1" method="post" name="" novalidate="novalidate">
                <input type="hidden" id="team-name" name="team-name" value="<?php echo $teamName; ?>" />
                <input type="hidden" id="teamId" name="teamId" value="<?php echo $teamId; ?>" />
                <div class="row">
                    <label for="first-name">First name</label>
                    <input type="text" id="first-name" name="first-name" value="" class="input" />
                </div>
                <div class="row">
                    <label for="last-name">Last name</label>
                    <input type="text" id="last-name" name="last-name" value="" class="input" />
                </div>
                <div class="row">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" value="" class="input" />
                </div>
                <div class="row">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" value="" class="input" />
                </div>
                <div class="row button-row">
                    <button type="button" class="button"><i class="fa fa-fw"></i> Save details</button>
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="ringleaders-help.php?topic=Admin%20Members" class="button white-button"><i class="fa fa-fw"></i> Help with this page</a><br />
                    <a href="ringleaders-start-over-new.php" class="button white-button"><i class="fa fa-fw"></i> Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>