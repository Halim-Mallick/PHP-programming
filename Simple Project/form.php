<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Form</title>

    <!-- Miligram CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin: 5%;
        }
    </style>
</head>
<body>
    <!-- <div class="container">
        <div class="row">
            <div class="column column-60 column offset-20">
                <h1>Welcome</h1>
                <h2>
                    <?php echo 'hello world'; ?>
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, iusto!</p>
            </div>
        </div>
    </div> -->
    <div class="conatiner">
        <div class="row">
            <div class="column column-60 column offset-20">
                <h2>Our first form</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, asperiores.</p>
                <p>
                    <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){ ?>
                    First name: <?php echo $_GET['fname'] ?> <br>
                    <?php }?>
                    <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){ ?>
                    Last Name: <?php echo $_GET['lname'] ?> <br>
                    <?php }?>            
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <button type="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
