<?php
include("connect.php");
$title=$email=$ingredients="";
$error=array("email"=>"","title"=>"","ingredients"=>"");
if(isset($_POST["submit"])){
    //prevents from opening harmful websites
    //echo htmlspecialchars($_POST["email"]) ;
    //echo  htmlspecialchars($_POST["title"]);
   // echo  htmlspecialchars($_POST["ingredients"]);
   
   //check email
   if(empty($_POST["email"])){
     $error["email"]="email required";
   }else{
         $email=$_POST["email"];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error["email"]="email must be valid email address";
       }
   }
   if(empty($_POST["title"])){
     $error["title"]= "title required";
   }else{
        $title=$_POST["title"];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
    $error["title"]= "title must be letters and spaces only";
        }
   }
   if(empty($_POST["ingredients"])){
    $error["ingredients"]="ingredient required";
   }else{
    $ingredients=$_POST["ingredients"];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        $error["ingredients"]="error ingredients required";
    }
   }
  if(array_filter($error)) {

  }else{
    //protects from sql injection
    $email=mysqli_real_escape_string($conn, $_POST["email"]);
     $title=mysqli_real_escape_string($conn, $_POST["title"]);
      $ingredients=mysqli_real_escape_string($conn, $_POST["ingredients"]);

      //create sql
      $sql="INSERT INTO pizzas(title,email,ingredients)Values('$title', '$email', '$ingredients')";
      //save to db and check
      if(mysqli_query($conn, $sql)){
          header("Location:netninja.php ");
      }else{
        //error
      }
      echo "error";
    
  }
};
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
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo  htmlspecialchars($email)?>">
            <div class="red-text">
                <?php echo $error["email"]?>
            </div>
            <label for="">Pizza Title</label>
            <input type="text" name ="title" value="<?php echo htmlspecialchars($title)?>">
             <div class="red-text">
                <?php echo $error["title"]?>
            </div>
            <label for="">Ingredients (comma seperated)</label>
        <input type="text" name="ingredients" value="<?php echo  htmlspecialchars($ingredients)?>">
         <div class="red-text">
                <?php echo $error["ingredients"]?>
            </div>
        <div class="center">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
</div>
        </form>
    </secton>
</html>