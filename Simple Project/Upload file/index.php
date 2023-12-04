<?php
$allowTypes=array(
    'image/png',
    'image/jpg',
    'image/jpeg'
);
if ($_FILES['photo']) {
    //if($_FILES['photo']['type']=='image/jpg' || $_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/png'){
    if(in_array($_FILES['photo']['type'],$allowTypes)!==false && $_FILES['photo']['size']>5*1024*1024){
    //move_uploaded_file($_FILES['photo']['tmp_name'],'files/image.png');
    move_uploaded_file($_FILES['photo']['tmp_name'], 'files/' . $_FILES['photo']['name']);
}
}
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
    <style>
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Upload file using php</h2>
                <pre>
                    <?php
                    print_r($_POST);
                    print_r($_FILES);

                    ?>
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <label for="photo">File</label>
                    <input type="file" name="photo" id="photo">
                    <button type="submit">Sumbit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
