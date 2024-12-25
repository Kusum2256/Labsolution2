<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Variables and Data Types</title>
</head>
<body>
    <h1>PHP Variables and Data Types</h1>
    <?php
    $intVar = 10; 
    $floatVar = 20.5; 
    $stringVar = "Hello, PHP!";
    $boolVar = true; 
    $arrayVar = array("Apple", "Banana", "Cherry"); 
    echo "<h2>Printing variables using echo:</h2>";
    echo "Integer: $intVar<br>";
    echo "Float: $floatVar<br>";
    echo "String: $stringVar<br>";
    echo "Boolean: " . ($boolVar ? 'true' : 'false') . "<br>";
    echo "<h2>Printing variables using print:</h2>";
    print "Integer: $intVar<br>";
    print "Float: $floatVar<br>";
    print "String: $stringVar<br>";
    print "Boolean: " . ($boolVar ? 'true' : 'false') . "<br>";
    echo "<h2>Displaying array using print_r:</h2>";
    echo "<pre>";
    print_r($arrayVar);
    echo "</pre>";
    echo "<h2>Displaying array using var_dump:</h2>";
    echo "<pre>";
    var_dump($arrayVar);
    echo "</pre>";
    echo "<h2>Data Types:</h2>";
    echo "Type of intVar: " . gettype($intVar) . "<br>";
    echo "Type of floatVar: " . gettype($floatVar) . "<br>";
    echo "Type of stringVar: " . gettype($stringVar) . "<br>";
    echo "Type of boolVar: " . gettype($boolVar) . "<br>";
    echo "Type of arrayVar: " . gettype($arrayVar) . "<br>";
    ?>
</body>
</html>
