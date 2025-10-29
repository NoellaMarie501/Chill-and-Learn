<?php
//Associative array to hold error message
$error=array("email"=>"", "title"=>"","ingredients"=>"");
$email=$title=$ingredients="";
//isset checks whether a variable has been set
 if(isset($_POST["submit"])){
    //converts string to html entities
    //echo htmlspecialchars($_POST["email"]);
   //echo htmlspecialchars($_POST["title"]);
    //echo htmlspecialchars($_POST["ingredients"]) ;
    
    //check email is submitted
    if(empty($_POST["email"])){
         $error["email"]= "Email required<br>";
    }else{
        //checking for a valid email
        $email=$_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $error["email"]= "Correct email required";
        }
    }
//check title
if(empty($_POST["title"])){
     $error["title"]= "Title required<br>";
}else{
    //checking for valid title
     $title=$_POST["title"];
     if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
    $error["title"] ="invalid title";
     }
}
//check ingredients
if(empty($_POST["ingredients"])){
     $error["ingredients"]= "Ingredients required<br>";
}else{
    //checking for valid ingredients
     $ingredients=$_POST["ingredients"];
     if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        $error["ingredients"]="Ingredients must be valid";
     }
}
//sends you to another page
if(array_filter($error)){
   // echo "invalid form";
}else{
    header("location:home.php");
 //echo "valid form";
}
 }
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
include("footer.php");
?>
    <secton class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="form.php"  method="POST"class="white">
            <label>Your Email:</label>
            <Input type="text" name="email" value=<?php //avoid the page from refreshing
            echo htmlspecialchars($email)?>>
            <div class="red-text"><?php  //printing error msg below the form 
            echo $error["email"];?></div>
             <label>Pizza Title:</label>
            <Input type="text" name="title" value=<?php echo htmlspecialchars($title)?>>
            <div class="red-text"><?php echo $error["title"];?></div>
             <label>Ingredients (comma separated):</label>
            <Input type="text" name="ingredients" value=<?php echo htmlspecialchars($ingredients)?>>
            <div class="red-text"><?php echo $error["ingredients"];?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </secton>
</html>