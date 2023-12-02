<?php
include_once "func2.php";
$fruits = ["Apple", "mango", "Orange", "Banana"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Dropdown Select</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-ofset-20">
                <h2>Select Dropdown</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, omnis.</p>
                <p>
                    <?php
                       if(isset($_POST['fruits']) && !empty($_POST['fruits'])){
                        $sfruits=$_POST['fruits'];

                        echo "You have Selected: ".join(',',$sfruits);
                       }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-ofset-20">
                <form method="POST">
                    <label for="fruit">Select Some Fruits</label>
                    <select style="height: 150px;" name="fruits[]" id="fruit" multiple>
                        <option value="" disabled selected>Select Fruits</option>
                        <?php displayOption($fruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
