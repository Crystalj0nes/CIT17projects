Operator Types.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <h1>06_Arithmetic Operators</h1>
</head>
<body>
    <style>
         h1 h3 h5{
            text-align: center;
        }
        .cent{
            margin-left: auto;
            margin-right: auto;
        }
        body{
            text-align: center;
        }

    </style>

<table border="2" class="cent">
 <tr> 
    <th>Operator</th>
    <th>Description</th>
    <th>Example</th>
    
  </tr>
  <tr>
    <td>+</td>
    <td>Adds two operands</td>
    <td>A + B will give 30</td>
    
  </tr>
  <tr> 
    
    <td>-</td>
    <td>Subtracts second operand from the first</td>
    <td>A - B will give -10</td>
 </tr>
 <tr> 
    
    <td>*</td>
    <td>Multiply both operands</td>
    <td>A * B will give 200</td>
 </tr>
 <tr>
    <td>/</td>
    <td>Divide the numerator by denominator</td>
    <td>B / A will give 2</td>
    
  </tr>
  <tr>
    <td>%</td>
    <td>Modulus Operator and remainder of after an integer division</td>
    <td>B % A will give 0</td>
   
  </tr>
  <tr>
    <td>++</td>
    <td>Increment operator, increases integer value by one</td>
    <td>A++ will give 11</td>

  </tr>
  <tr>
    <td>--</td>
    <td>Decrement operator, decreases integer value by one</td>
    <td>A-- will give 9</td>

  </tr>
</table>
    
        <h3>Example:</h3>
        <p>$a = 42;<br/>
            $b = 20;<br/>
            $c = $a + $b;<br/>
            echo "Addition Operation Result: $c ";<br/>
            $c = $a - $b;<br/>
            echo "Subtraction Operation Result: $c ";<br/>
            $c = $a * $b;<br/>
            echo "Multiplication Operation Result: $c ";<br/>
            $c = $a / $b;<br/>
            echo "Division Operation Result: $c ";<br/>
            $c = $a % $b;<br/>
            echo "Modulus Operation Result: $c ";<br/>
            $c = $a++;<br/>
            echo "Increment Operation Result: $c ";<br/>
            $c = $a--;<br/>
            echo "Decrement Operation Result: $c ";<br/>
        </p>
    <h5>OUTPUT:</h5>
<?php
$a = 42; 
$b = 20;
$c = $a + $b;
echo "Addition Operation Result: $c <br/>";
$c = $a - $b;
echo "Subtraction Operation Result: $c <br/>";
$c = $a * $b;
echo "Multiplication Operation Result: $c <br/>";
$c = $a / $b;
echo "Division Operation Result: $c <br/>";
$c = $a % $b;
echo "Modulus Operation Result: $c <br/>";
$c = $a++;
echo "Increment Operation Result: $c <br/>";
$c = $a--;
echo "Decrement Operation Result: $c <br/>";
?>
</body>
</html>