<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponentiate">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="logarithm">Logarithm</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Error: Division by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
        case "exponentiate":
            $result = pow($num1, $num2);
            break;
        case "percentage":
            $result = ($num1 / $num2) * 100;
            break;
        case "sqrt":
            $result = sqrt($num1);
            break;
        case "logarithm":
            if ($num1 <= 0) {
                $result = "Error: Logarithm of non-positive number";
            } else {
                $result = log($num1);
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }
    echo "Result: $result";
}
?>

</body>
</html>
