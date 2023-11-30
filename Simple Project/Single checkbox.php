<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>HTML form With php</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Welcome New dev</h1>
                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    $checkbox = '';
                    if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                        $checkbox = 'checked';
                    }
                    ?>

                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        $fname = $_REQUEST['fname'];
                    } ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        $lname = $_REQUEST['lname'];
                    } ?>
                </p>
                <p>
                    First Name:
                    <?php echo $fname ?></br>
                    First Name:
                    <?php echo $lname ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname ?>">

                    <label for="fname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname ?>">
                    <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checkbox ?>>
                    <label for="cb1" class="label-inline">Some checkbox</label><br>

                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
