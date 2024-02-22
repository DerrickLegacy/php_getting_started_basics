<html>
<head>
    <title>Front Door</title>
</head>
<?php
    // Keeping track of how many times a web page has been visited.
    $pageAccesses = $_COOKIE['accesses'];
    setcookie('accesses', ++$pageAccesses);
    print($pageAccesses);
    // Altering backgrounds through accessing cookie data in the $_COOKIE variable
    $backgroundName = $_COOKIE['bg'];
    $foregroundName = $_COOKIE['fg'];
?>
<body bgcolor="<?php echo $backgroundName; ?>" text="<?php echo $foregroundName; ?>">
    <h1>Welcome to the Store</h1>
    <p>We have many fine products for you to view. Please feel free to browse the aisles and stop an assistant at any time. But remember, you break it you bought it!</p>
    <p>Would you like to <a href="colors.php">change your preferences?</a></p>
</body>
</html>
