<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Attribute Example</title>
</head>
<body>

<?php
// PHP code to handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data using the 'name' attribute with $_REQUEST
    $username = $_REQUEST['username'];

    // Processing the form data
    echo "Hello, $username!";
}
?>

<!-- HTML form with 'name' and 'value' attributes -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Enter your name:</label>
    <input type="text" name="username" id="username" value="">
    <button type="submit">Submit</button>
</form>

</body>
</html>
