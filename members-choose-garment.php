<!doctype html>
<html>
<head>
    <title>Group Kit- Members sign in</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body class="choose-garment page">

    <?php include_once('includes/header.php'); ?>

    <div class="main">
        <div class="content">

            <div class="title">
                <h2>Choose your garment</h2>
                <a href="#" class="button back-button white-button">Back</a>
                <div class="cboth"></div>
            </div>


            <div class="showcase">
                <div id="garment-display" class="display womens">
                    <span class="figure" style="color: #231F20">
                        00
                    </span>
                </div>
                <div class="gender-switch">
                    <a href="#" class="button white-button selected" data-gender="womens">Womens</a>
                    <a href="#" class="button white-button" data-gender="mens">Mens</a>
                </div>
                <div class="details">
                    <p>100% Cotton Ladies T-Shirt. Lorem Ipsum is simply dummy text of the printing and typesetting industry ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.It survived not only five centuries.</p>
                </div>
            </div>

            <form class="form" id="choose-garment-form" action="" method="post" name="choose-garment-form" novalidate="novalidate">
                <input type="hidden" id="gender" name="gender" />
                <div class="row">
                    <label for="size">Choose your size</label>
                    <select id="size" name="size" class="select">
                        <option value="nil" selected="selected">select a size</option>
                        <option value="09">Womens size 9</option>
                        <option value="10">Womens size 10</option>
                        <option value="11">Womens size 11</option>
                        <option value="12">Womens size 12</option>
                    </select>
                    <p class="info">To fit chest:<br/>
                        Ipsum gentrul gway farts.
                    </p>
                </div>
                <div class="row">
                    <div class="like-label">Choose your colour</div>
                    <div class="like-input">
                        <label for="black"><span class="colour black"></span></label>
                        <input id="black" type="radio" name="colour" value="black" checked>
                        <label for="blue"><span class="colour blue"></span></label>
                        <input id="blue" type="radio" name="colour" value="blue">
                        <label for="red"><span class="colour red"></span></label>
                        <input id="red" type="radio" name="colour" value="red">
                    </div>
                </div>
                <div class="row button-row">
                    <input type="submit" value="Personalise front" class="button" />
                </div>
                <div class="cleft"></div>
                <div class="divider"></div>
                <div class="helpers">
                    <a href="#" class="button white-button">Help with this page</a><br />
                    <a href="#" class="button white-button">Start over</a>
                </div>
            </form>
            <div class="cboth"></div>


        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

</body>
</html>