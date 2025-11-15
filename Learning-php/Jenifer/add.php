<?php
include('dbconnect.php');
$email=$title=$ingredients="";
$errors=array('email'=>'','title'=>'','ingredients'=>'');
if(isset($_POST['submit'])){
    //email check
    if(empty($_POST['email'])){
$errors['email']='Email is required <br />';
    }
    else{
     $email=$_POST['email'];
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']="enter a valid email address";
     }  
    }

    //title check
    if(empty($_POST['title'])){
        $errors['title']='Title is required <br />';
    }
    else{
     $title=$_POST['title'];
     if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
       $errors['title']='title must contain only letters and spaces';
     }
    }
    //ingredients check
    if(empty($_POST['ingredients'])){
        $errors['ingredients']='Ingredients are required <br />';
    }
    else{
     $ingredients=$_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
       $errors['ingredients']='ingredients must be a comma seperated list';
     } 
     if(array_filter($errors)){
       // echo 'Errors in the form';
     }
     else{
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $title=mysqli_real_escape_string($conn,$_POST['title']);
      $ingredients=mysqli_real_escape_string($conn,$_POST['ingredients']);
      $sql="INSERT INTO pizzas(email,title,ingredients) VALUES ('$email','$title','$ingredients')";
      if(mysqli_query($conn, $sql)){
           header('location: index.php');
      } else{
        echo "query error:".mysqli_error($conn);
      }
       
     }
    }
 } //end of POST[=] check

?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email']?></div>
        <label>Pizza Title: </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title']?></div>
        <label>Ingredients (comma seperated): </label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients']?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
   <?php include('footer.php');?>

</html>