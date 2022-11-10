<html>

<body>
    <!--Your code goes here-->
    <?= "The multiplication of the two numbers: {$_GET['mul1']} and {$_GET['mul2']} is: " ?>
    <h3><?= $_GET['mul1'] * $_GET['mul2']; ?></h3>

    <a href="index.php">Reset</a>
</body>

</html>