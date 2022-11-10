<html>

<body>

    <form action="addition.php" method="get">
        <h1>Addition</h1>
        First Number: <input name="num1" type="number"></input>
        Second Number: <input name="num2" type="number"></input>
        <button type="submit">Add</button>
    </form>

    <form action="subtract.php" method="get">
        <h1>Subtraction</h1>
        First Number: <input type="number" name="sub1"></input>
        First Number: <input type="number" name="sub2"></input>
        <button type="submit">Subtract</button>
    </form>

    <form action="division.php" method="get">
        <h1>Divison</h1>
        First Number: <input type="number" name="num3"></input>
        Second Number: <input type="number" name="num4"></input>
        <button type="submit">Divide</button>
    </form>
    <form action="multiply.php" method="get">
        <h1>Multiply</h1>
        First Number: <input type="number" name="mul1"></input>
        First Number: <input type="number" name="mul2"></input>
        <button type="submit">Multiply</button>
    </form>


    <a href="index.php">Reset</a>
</body>

</html>