<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //accessing elements in an array
    $friends=array("joseph", "frida", "linda");
    echo $friends[0]."<br>";
    //renaming elements in an array
    $friends[0]="jenny";
    echo $friends[0]."<br>";
    //determining the length of an array
    echo count($friends);
    ?>
    <form action="home.php" method="post">
    Oranges: <input type="checkbox" name="fruits[]" value="Oranges">
     Pears: <input type="checkbox" name="fruits[]" value="Pears">
      Apples: <input type="checkbox" name="fruits[]" value="Apple">
      Name:<input type="text" name="student">
      <input type="submit">
    </form>
    <?php
        //working with checkboxes
     $fruits=$_POST["fruits"];
    echo $fruits[1]."<br>";
    //accessing values in arrays using key values(john,pam,joeph)
  $grades=array("john"=>"A", "pam"=>"B", "joseph"=>"C");
 echo  $grades["john"]="C"."<br>";
 echo  $grades["pam"]."<br>";
 echo  $grades["joseph"]."<br>";
//accessing vlues in an associate array
 echo $grades[$_POST["student"]];
 //calling functions
 function sayHi(){
    echo "hello friend<br>";
 }
 sayHi();
 function sayHello($name){
    echo "hey $name <br>";
 }
 sayHello("Mark");
 //return statements
 function cube($num){
return $num*$num;
 }
echo cube(2)."<br>";
//if statements
function getMax($num1,$num2){
    if($num1>$num2){
        return "good";
    }else{
        return "bad";
    }
}
 echo getMax(6,4);
 //building a simple calculator
    ?>
    <form action="home.php" method="get">
     Num1:<input type="number" step="0.001" name="number1"><br>
     Operator:<input type="text" name="opp"><br>
        Num2:<input type="number" step="0.001" name="number2"><br>
        <input type="submit">
    </form>
    <?php
    $number1=$_GET["number1"];
    $opp=$_GET["opp"];
    $number2=$_GET["number2"];
    if($opp==="+"){
     echo $number1 + $number2;
    }else if($opp==="-"){
        echo $number1 - $number2;
    }else if($opp==="/"){
        echo $number1 / $number2;
    }else if($opp==="*"){
        echo $number1 * $number2;
    }else{
        echo "Enter valid sign";
    }
    ?>
</body>
</html>