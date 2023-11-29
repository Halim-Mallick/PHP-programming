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
                    <?php if (isset($_GET['fname'])) { ?>
                        Fname:
                        <?php echo $_GET['fname']; ?></br>
                    <?php } ?>
                    <?php if (isset($_GET['lname'])) { ?>
                        Lname:
                        <?php echo $_GET['lname']; ?>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="fname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
