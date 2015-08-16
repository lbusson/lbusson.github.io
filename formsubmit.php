<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
    //$action = $_REQUEST['action']; // We dont need action for this tutorial, but in a complex code you need a way to determine ajax action nature
    //$formData = json_decode($_REQUEST['formData']); // Decode JSON object into readable PHP object

    $name = $_POST->{'name'}; // Get username from object
    $email = $_POST->{'email'}; // Get password from object
    $slider = $_POST->{'slider'}; // Get password from object
    $textarea = $_POST->{'textarea-a'}; // Get password from object
?>

</body>
</html>