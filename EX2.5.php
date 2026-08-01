<?php
$result = "";

function calculator($num1, $num2, $op)
{
    switch ($op) {
        case "+":
            return $num1 + $num2;

        case "-":
            return $num1 - $num2;

        case "*":
            return $num1 * $num2;

        case "/":
            if ($num2 != 0)
                return $num1 / $num2;
            else
                return "Cannot divide by zero";

        default:
            return "Invalid Operation";
    }
}

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation'];

    $result = calculator($num1, $num2, $op);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($result !== "") {
    echo "<h3>Result = " . $result . "</h3>";
}
?>

</body>
</html>