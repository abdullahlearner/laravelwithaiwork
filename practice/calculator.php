<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #ffffff;
        }
        .container {
            margin-top: 50px;
        }
        .form-control, .btn {
            background-color: #495057;
            border: 1px solid #6c757d;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Calculator</h1>
        <form method="get" id="calculatorForm">
            <div class="form-group">
                <label for="number1">Number 1</label>
                <input name="valu1" type="number" class="form-control" id="number1" placeholder="Enter first number">
            </div>
            <div class="form-group">
                <label for="number2">Number 2</label>
                <input name="valu2" type="number" class="form-control" id="number2" placeholder="Enter second number">
            </div>
            <div class="form-group">
                <label for="operation">Operation</label>
                <select class="form-control" name="operation" id="operation">
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
            </div>
            <button type="submit"  class="btn btn-primary btn-block" onclick="calculate()">Calculate</button>
        </form>
        <h3 class="text-center" id="result"></h3>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>
</html>

<?php 

// $valu1 ;
// $valu2 ;

function add($valu1,$value2){
    return $valu1 + $value2;
}

function subtract($valu1,$value2){
    return $valu1 - $value2;
}

function multiply($valu1,$value2){
    return $valu1 * $value2;
}


function divide($valu1,$value2){
    return $valu1 / $value2;
}

if(isset($_GET['valu1'])){
    
$valu1 = $_GET['valu1'];
$value2 = $_GET['valu2'];
$operation = $_GET['operation'];

$result = "";
// echo $operation;


switch($operation){
    case 'add':
        $result = add($valu1,$value2);
        break;
    case 'subtract':
        $result = subtract($valu1,$value2);
        break;
    case 'multiply':
        $result = multiply($valu1,$value2);
        break;
    case 'divide':
        $result = divide($valu1,$value2);
        break;
    default:
    $result = "Invalid operation selected";    
}


echo "<h1>Result: $result</h1>";
}
?>