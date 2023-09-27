<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter the first number: <input type="text" name="num1"><br>
        Enter the second number: <input type="text" name="num2"><br>
        Select operation:
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Check if both inputs are numeric
        if (is_numeric($num1) && is_numeric($num2)) {
            // Perform the selected operation and display the result
            switch ($operation) {
                case "addition":
                    $result = $num1 + $num2;
                    echo "Result: $num1 + $num2 = $result";
                    break;
                case "subtraction":
                    $result = $num1 - $num2;
                    echo "Result: $num1 - $num2 = $result";
                    break;
                case "multiplication":
                    $result = $num1 * $num2;
                    echo "Result: $num1 * $num2 = $result";
                    break;
                case "division":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result: $num1 / $num2 = $result";
                    } else {
                        echo "Error: Division by zero is not allowed.";
                    }
                    break;
                default:
                    echo "Invalid operation selected.";
            }
        } else {
            echo "Please enter valid numeric values for both numbers.";
        }
    }
    ?>

</body>
</html>