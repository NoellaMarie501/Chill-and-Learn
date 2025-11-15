<?php
if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);
    //email check
    if(empty($_POST['email'])){
        echo 'Email is reauired';
    }
    else{
     echo htmlspecialchars($_POST['email']);   
    }
    //title check
    if(empty($_POST['email'])){
        echo 'Title is required';
    }
    else{
     echo htmlspecialchars($_POST['title']);   
    }
    //ingredients check
    if(empty($_POST['ingredients'])){
        echo 'Ingredients are required';
    }
    else{
     echo htmlspecialchars($_POST['ingredients']);   
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email: </label>
        <input type="text" name="email">
        <label>Pizza Title: </label>
        <input type="text" name="title">
        <label>Ingredients (comma seperated): </label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
   <?php include('footer.php');?>

</html>