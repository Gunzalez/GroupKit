<!doctype html>
<html>
<head>
    <title>Group Kit</title>
    <?php include_once('includes/resources.php'); ?>
    <link rel="stylesheet" type="text/css" href="js/vendors/slick/slick.css"/>
</head>
<body class="home">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="carousel">
                <div class="stage">
                    <div class="slide slide-1" data-garment-price="11.99" data-garment-title="Hoody" data-garment-guid="garm0112hoody">
                        <img src="uploaded/carousel-garment-1-small.png" class="small" />
                        <img src="uploaded/carousel-garment-1-large.png" class="large" />
                    </div>
                    <div class="slide slide-2" data-garment-price="6.99" data-garment-title="Tank Top" data-garment-guid="garm0112tanktop">
                        <img src="uploaded/carousel-garment-2-small.png" class="small" />
                        <img src="uploaded/carousel-garment-2-large.png" class="large" />
                    </div>
                    <div class="slide slide-3" data-garment-price="5.99" data-garment-title="HandMe Down" data-garment-guid="garm01120handMeDown">
                        <img src="uploaded/carousel-garment-3-small.png" class="small" />
                        <img src="uploaded/carousel-garment-3-large.png" class="large" />
                    </div>
                    <div class="slide slide-4" data-garment-price="9.99" data-garment-title="Sweat Top" data-garment-guid="garm01120sweatTop">
                        <img src="uploaded/carousel-garment-4-small.png" class="small" />
                        <img src="uploaded/carousel-garment-4-large.png" class="large" />
                    </div>
                    <div class="slide slide-5" data-garment-price="10.99" data-garment-title="V-Neck Stretch" data-garment-guid="garm01120StretchyBaby">
                        <img src="uploaded/carousel-garment-5-small.png" class="small" />
                        <img src="uploaded/carousel-garment-5-large.png" class="large" />
                    </div>
                </div>
                <a href="#" id="price-tag" style="opacity: 0">
                    <span class="hand"><i class="fa fa-fw"></i></span>
                    <span class="title" data-role="title">Hooded top stretch</span>
                    <span class="price" data-role="price">&pound;12.00</span>
                    <span class="click">Click to start<br> ordering</span>
                </a>
            </div>
            <p class="introduction">Ringleaders choose your garment above</p>

            <ul class="entry-points">
                <li class="first-li">
                    <a href="members-sign-in.php">
                        <span class="icon"><i class="fa fa-fw"></i></span>
                        <span class="title">Team Members</span>
                        <span class="intro">Click icon above to complete an order that was arranged for you by your Ringleader.</span>
                    </a>
                </li>
                <li>
                    <a href="ringleaders-sign-in.php">
                        <span class="icon"><i class="fa fa-fw"></i></span>
                        <span class="title">Ringleaders</span>
                        <span class="intro">Click icon above to login to your account to create and amend your orders.</span>
                    </a>
                </li>
                <li class="last-li">
                    <a href="template-double.php">
                        <span class="icon"><i class="fa fa-fw"></i></span>
                        <span class="title">Everybody</span>
                        <span class="intro">Click icon above for help, contact details or our FAQ section.</span>
                    </a>
                </li>
                <div class="cleft"></div>
            </ul>

        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>
    <script src="js/vendors/slick/slick.js"></script>

</body>
</html>