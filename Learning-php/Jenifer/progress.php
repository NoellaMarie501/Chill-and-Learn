<?php
//how to declare variables 
$firstName= 'jenifer';
$lastName= 'princess';
$age= 17;

//to declare a constant in php use the define function 
define('GENDER', 'female')."<br>";
echo GENDER."<br>";

//to concatenate 2 strings 
echo $firstName. $lastName."<br>";

//difference between single quotes and double quotes in php
echo 'hey my name is $firstName <br>';
echo "hey my name is $firstName <br>";

//how to get the length of a string 
echo strlen($firstName)."<br>";

//numbers 
$pi= 3.14;
echo floor($pi)."<br>";
echo ceil($pi)."<br>";

//Arrays

//1. indexed arrays
$peopleOne=["precious", "afayam", "neltine"];
echo $peopleOne[2]."<br>";

//to add a new value to an array
$peopleOne[]= "mary";
array_push($peopleOne,"Martha");
echo $peopleOne[4]."<br>";

//to know the length of an array
echo count($peopleOne)."<br>";

//to merge 2 arrays 
$peopleTwo= ["kylie", "grams"];
$peopleThree= array_merge($peopleOne, $peopleTwo);
echo count($peopleThree)."<br>";

//2. Associative arrays 
$description=["name"=>"carla", "age"=>"19","height"=>"1.56cm"];
print_r($description)."<br>";
echo $description["name"]."<br>";

//3. multidimensional arrays 
$groups=[
    ['name'=>'carla', 'price'=>'5000frs'],
    ['name'=>'dika','price'=>'5000frs'],
    ['name'=>'grace','price'=>'5000frs'],
    ['name'=>'max','price'=>'5000frs'],
];


//loops(using 3 different loops to perform the same task)
//1. for loops
$friends=["dika", "grace", "Tchakounte", "max"];
for($i=0; $i<count($friends); $i++){
     echo $friends[$i]."<br>";
}
//2. foreach loop
foreach($friends as $friend){
echo $friend."<br>";
}
//3. while loop
$i=0;
while($i<count($friends)){
    echo $friends[$i]."<br>";
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress</title>
</head>
<body>
    <div>
        <ul>
        <?php foreach($groups as $group){?>
        <h3><?php echo $group["name"]; ?></h3>
        <p>E <?php  echo $group["price"];?></p>
            <?php }?>
        </ul>
    </div>
    
</body>
</html>