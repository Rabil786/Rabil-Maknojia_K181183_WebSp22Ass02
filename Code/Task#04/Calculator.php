<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
switch ($operator) {
  case "+":
    $temp = $num1 + $num2;
    echo "Answer: ". $temp;
    break;
  case "-":
    $temp = $num1 - $num2;
    echo "Answer: ". $temp;
    break;
  case "*":
    $temp = $num1 * $num2;
    echo "Answer: ". $temp;
    break;
  case "/":
    $temp = $num1 / $num2;
    echo "Answer: ". $temp;
    break;
  default:
    echo "Wrong Input";
    header("Location: form.php");
}
?>