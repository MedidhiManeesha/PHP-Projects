<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2>PHP variables</h2>
<?php
    $name = "Manisha";
    $income = 30000;
    $x = true;
    $y = null;
    echo 'This girl is $name and her income is ' .$income;  echo "<br>"; echo  var_dump($y); echo "<br>";

    $friends = array("rohan", "manisha", " lorry");
    echo var_dump($friends);
    echo '<br>';
    echo $friends[1];
    ?>
<hr>
    <h2>PHP String methods</h2>
    <?php 
    
    $strname = "Manisha is a good girl";
    echo "<br>";
    echo "The length of" . "my string is " . strlen($strname);
    echo "<br>";
    echo str_word_count($strname);
    echo "<br>";
    echo strrev($strname);
    echo "<br>";
    echo strpos($strname, "is");
    echo "<br>";
    echo str_replace("Manisha", 'Maneesha', $strname);
    echo "<br>";
    echo str_repeat($strname, 4);
    echo "<br>";
    echo "<pre>";
    echo rtrim("    this is a good thing .    ");
    echo "<br>";
    echo ltrim("    this is a good thing .    ");
    echo "</pre>";
    ?>
    <hr>
    <h2>PHP operators</h2>

    <?php
    $a = 45;
    $b = 8;
    
    echo "For $a + $b, the result is ". ($a + $b) . "<br>";
    echo "For $a - $b, the result is ". ($a - $b) . "<br>";
    echo "For $a * $b, the result is ". ($a * $b) . "<br>";
    echo "For $a / $b, the result is ". ($a / $b) . "<br>";
    echo "For $a % $b, the result is ". ($a % $b) . "<br>";
    echo "For $a ** $b, the result is ". ($a ** $b) . "<br>";
    
    ?>
    <hr>
<h2>PHP Loops</h2>
    <?php
    $arr = array("banana", "apple", "guava", "grapes");
    for($i=0; $i < count($arr); $i++){
        echo $arr[$i];
        echo '<br>';
    }
// foreach - for objects but can use for arrays

$family = array("Manisha", "Ravi", "Kanya");
foreach($family as $value){
    echo "$value <br>";
}
    ?>
    <hr>
    <h2>PHP functions</h2>
    <?php 
    
    function processMarks($marks){
        $total = 0;
        foreach($marks as $mark){
            $total += $mark;
        }
        $Percent = $total/count($marks);
        return $Percent;
    }
    $rohan = [40,45,43,47];
    $avg = processMarks($rohan);
    echo "Total marks secured:  $avg";
    echo "<br>";
    $d = date("dS F Y");
    echo "Today's date is: $d";
    ?>
<hr>
    <h2>PHP Associated arrays</h2>
    <?php
    $FavCol = array('manisha' => 'blue', 'ravi' => 'green', 'kanya'=>'yellow');
    foreach($FavCol as $name => $color){
        echo "$name's favorite color is $color";
        echo "<br>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>