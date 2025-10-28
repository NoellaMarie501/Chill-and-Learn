<?php
//isset checks whether a variable has been set
 if(isset($_POST["submit"])){
    //converts string to html entities
    //echo htmlspecialchars($_POST["email"]);
   //echo htmlspecialchars($_POST["title"]);
    //echo htmlspecialchars($_POST["ingredients"]) ;

    //check email
    if(empty($_POST["email"])){
        echo "Email required<br>";
    }else{
        echo htmlspecialchars($_POST["email"]);
    }
//check title
if(empty($_POST["title"])){
    echo "Title required<br>";
}else{
     echo htmlspecialchars($_POST["title"]);
}
//check ingredients
if(empty($_POST["ingredients"])){
    echo "Ingredients required<br>";
}else{
     echo htmlspecialchars($_POST["ingredients"]);
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
            <Input type="text" name="email">
             <label>Pizza Title:</label>
            <Input type="text" name="title">
             <label>Ingredients (comma separated):</label>
            <Input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </secton>
</html>