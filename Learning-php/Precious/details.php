<?php
include("connect.php");
if(isset($_POST["delete"])){
    //to take out any harmful code
    $id_to_delete=mysqli_real_escape_string($conn, $_POST["id_to_delete"]);
    //to delte a record
    $sql="DELETE FROM pizzas WHERE id=$id_to_delete";
    //check if delete is successful
    if(mysqli_query($conn, $sql)){
        //success
      header("Location:netninja.php");
    }
    {
         echo "query error: " . mysqli_error($conn);
    }
}
//Check get request id parameter
if(isset($_GET["id"])){
    //escaping sensitive sql characters(protect db)
$id=mysqli_real_escape_string($conn, $_GET['id']);
//make sql
$sql="SELECT * FROM pizzas WHERE id=$id";

//get query result
$result=mysqli_query($conn, $sql);
//fetch result in an array format
$pizza=mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);
//print_r($pizza);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("header.php");?>
<div class="container center">
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza["title"]);?></h4>
        <p>Created by <?php htmlspecialchars($pizza["email"])?></p>
        <h5>Ingredients</h5>
        <p><?php htmlspecialchars($pizza["ingredients"]); ?></p>
        <!--delete form-->
        <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>
        <?php else:?>
            <h5>No such pizza exist!</h5>
            <?php endif;?>
</div>
<?php include("footer.php");?>
</html>