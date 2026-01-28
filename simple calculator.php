<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

<h2>Simple PHP Calculator</h2>

<form method="post">
    <input type="number" name="num1" required>
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["operation"];
    $result = "";

    if ($op == "+") {
        $result = $num1 + $num2;
    } elseif ($op == "-") {
        $result = $num1 - $num2;
    } elseif ($op == "*") {
        $result = $num1 * $num2;
    } elseif ($op == "/") {
        if ($num2 == 0) {
            $result = "Error: Division by zero";
        } else {
            $result = $num1 / $num2;
        }
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>



?>