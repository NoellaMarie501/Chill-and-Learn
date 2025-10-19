<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "My first trial"; //To display text in the browser
    echo "<h1>Hello Ninja</h1>";
    $name="precious";//declearing variables
    echo "The girl's name is $name<br>";//accessing values stored in variable
    $age=30;
    echo "i am $age years old"."<br>";
    define("NAME", "Female");//Dealing with constants
    echo  NAME."<br>";//accessing constants
    $phrase="panda";
    $phrase[0]="b";//replacing the first letter
    echo $phrase."<br>";
    //replaces banda with monkey in the phrase variable
    echo str_replace("banda", "monkey", $phrase)."<br>";
    echo substr("$phrase",2);
    //converts to uppercase
    echo strtoupper($phrase);
    //2^4
    echo pow(2,4)."<br>";
    //12
    echo sqrt(144)."<br>";
    echo max(4,7)."<br>";
    echo min(7,1)."<br>";
    echo round(3.7)."<br>";
    //rounds up
    echo ceil(3.5)."<br>";
    //rounds down
    echo floor(3.4)."<br>";
    //performs maths calculations
    echo (3*2)."<br>";
    //get displays what is being put in the input based on value of the name
   echo $_GET["name"];
   //post keeps the webpage info private
   echo $_POST["password"];
   //displays the result of the 2 numbers
   echo $_GET["num1"] + $_GET["num2"];
    ?>
     <form action="index.php" method="get">
        Name:<input type="text" name="name">
        Num1:<input type="number" name="num1">
        Num2:<input type="number" name="num2">
        <input type="submit">
    </form>
    <form action="index.php" method="post">
        password:<input type="password" name="password"> 
    </form>
    <form action="index.php" method="get">
        Color:<input type="text" name="color">
         Noun:<input type="text" name="noun">
          Celebrity:<input type="text" name="celebrity">
          <input type="submit">
    </form>
    <?php
    //gets the info inputed by the user and displays in the text
    $color=$_GET["color"];
    $noun=$_GET["noun"];
    $celebrity=$_GET["celebrity"];
    echo "$color is my best color <br>";
    echo "$noun is very short <br>";
    echo "i love $celebrity <br>";
    //creating abook data type
    class Book{
        //defining attributes
        var $title;
        var $author;
        var $pages;

      
       function __construct($atitle, $aauthor, $apages){
        //refers to the current object
        $this->title=$atitle;
        $this->author=$aauthor;
        $this->pages=$apages;
       }
    }
    $book1=new Book("harry", "john", 56);
    //displaying the pages 
    echo $book1->pages
    //creating a book datatype to store it in the book1 variable
   /* $book1= new Book;
    $book1->title="harry";
    $book1->author="john";
    $book1->pages=56;
    //displays only the title of the book
    echo $book1->title;*/
   
    ?>
</body>

</html>