<?php
    echo "good morning<br>";
    $name="precious";
    echo $name."<br>";
    $age=30;
    define("SURNAME", "Afayam");
    $stringOne="My email is ";
    $stringTwo="preciousafayam@gmail.com";
     //joining two strings
    echo $stringOne . $stringTwo. "<br>"; 
    $famname=" Uchon precious";
    //using a single quote to call variable outside
   echo 'My name is'. $famname. "<br>";
   //double quotes calls variable inside of the quotes
   echo "My name is $famname". "<br>";
   //escaping characters inside string using backslash
   echo "The dog barked \"wouwou\"<br>";
   echo "The dog barked 'wouwou'";
   echo 'The dog barked "wouwou"<br>';
    //dealing with functions
    $length="jenifer";
     echo strlen($length)."<br>";
     echo str_replace("j", "p", $length)."<br>";
     //basic operators +,-,*,/,**(power)
     //5^3
     #echo 5**3;
     //echo 2*(3+9)/3;
     //increment and decrement operators
     $radius=25;
     //no incrementation since it echos radius before ++
     echo $radius++."<br>";
     //Echo the second time to get the increment
     echo $radius ."<br>";
     //index arrays
     $peopleTwo=array("Lucy","joseph","Nadia");
     $people=["jen","john","job"];
     echo $people[1]."<br>";
     $ages=[20,30,40];
     //function to print all values in an array
     print_r($ages)."<br>";
     //overwriting a particular value
    $ages[0]="10";
   # print_r($ages);
    //adding new values
    $ages[]=50;
   // print_r($ages);
    array_push($ages,60);
      //print_r($ages);
      //length of an array using count
      echo count($ages)."<br>";
      //merging arrays
      $peopleThree=array_merge($people,$peopleTwo);
      //print_r($peopleThree);
      
      //Associative arrays(key & value pairs)
      $ninjaone=["jenifer"=>"17", "precious"=>"19", "neltine"=>"20"];
      echo $ninjaone["jenifer"]."<br>";
      $ninjaone["mary"]="red";
     // print_r($ninjaone)."<br>";
      
     //Multi-dimensional arrays
     $blogs=[
        ["subject"=>"Chemistry","grade"=>"A", "mark"=>"12"],
        ["subject"=>"Biology","grade"=>"B", "mark"=>"18"],
        ["subject"=>"Physics","grade"=>"C", "mark"=>"10"],
     ];
     echo $blogs[2]["grade"]."<br>";
     $blogs[]=["subject"=>"geography","grade"=>"E","mark"=>"2"];
     //print_r prints a complete array
     print_r($blogs);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div><?php echo $age;?></div>
 <div><?php echo SURNAME;
 ?></div>
 <?php
 //loops
 $students=["std1","std2","std3"];
 for($i=0; $i<count($students); $i++){
    echo $students[$i]."<br>";
 }
 //usinf for each
 $designs=["kaba","jeans","colans"];
 foreach($designs as $design){
    echo $design. "<br>";
 }
 //dealing with multi-dimensional arrays
 $products=[
    ["title"=>"Princess","price"=>200],
     ["title"=>"Prince","price"=>800],
      ["title"=>"Queen","price"=>1000]
 ];
    foreach($products as $product){
      echo $product["title"]."-" .$product["price"];
      echo "<br>";
      };
 ?>
 <h1>Products</h1>
 <ul>
    <?php foreach($products as $pdt){ ?>
    <h3><?php echo $pdt["title"]?></h3>
    <p><?php echo $pdt["price"]?></p>
    <?php }?>
 </ul>
 <?php
 //using booleans
 //echo 5<10;
 #checks the first letter
 #echo "jenifer" < "precious <br>";
 #an uppercase letter is less than a lowercase
 //echo "jenifer" > "Jenifer". "<br>";

#conditional statements
$price=30;
if($price<20){
    echo "condition is not met <br>";
}else if($price<30){
    echo "condition near <br>";
}else{
    echo "condion is good<br>";
};
$aliments=[
    ["fruits"=>"tomatoes", "price"=>200],
      ["fruits"=>"pineapple", "price"=>300],
        ["fruits"=>"mango", "price"=>500]
];
foreach($aliments as $aliment){
    if($aliment["price"]===200 || $aliment["price"]===300){
        echo $aliment["fruits"]."<br>";
    }
}
 ?>
 <div>
    <ul>
        <?php foreach($aliments as $liments){?>
        <?php if($liments["price"]===500){?>
            <li><?php echo $liments["fruits"]?></li>
            <?php } ?>
            <?php } ?>
    </ul>
 </div>
 <?php
 //functions
 //Setting a default value
 function sayHi($names="jenifer"){
    echo "hello girl $names<br>";
 }
 #callig the function
 //sayHi("precious");
 sayHi();
 function formatpdt($product){
    #echo "{$product["fruits"]} cost {$product["price"]} to buy"; 
    //using the return key word
    return "{$product["fruits"]} cost {$product["price"]} to buy";                         
 }
 $output=formatpdt(["fruits"=>"apple","price"=>"80"]);
 echo $output;
 //dealing with require and include
 //include is like a merging factor,merge two files together 
 //require does the same thing 

 //Get sends data in the URL
 ?>
</body>
</html>