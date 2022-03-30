<html>
<head>
    <title>Index</title>
</head>
<body>
    <table border="2">
        <h1>PHP Calculator</h1>
        <form action="Calculator.php" method="POST">
            <tr>
            <td>Enter First Number   <input type="text" name= "num1" placeholder="" required></td>
            </tr>

            <tr>
            <td>Select Operator
            <select name= "operator">
            <option>select one</option>
            <option>/</option>
            <option>*</option>
            <option>+</option>
            <option>-</option>
            </select></td>
            </tr>

            <tr>
            <td>Enter Second Number <input type="text" name= "num2" placeholder="" required></td>
            </tr>
            
            <tr>
            <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>