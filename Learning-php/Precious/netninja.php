<?php
include("connect.php");
//write query for all pizzas
$sql= 'SELECT title, ingredients, id FROM pizzas';
//make query and get reults
$result= mysqli_query($conn, $sql);
//fetch resulting rows as an array
$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
//free result from the memory
mysqli_free_result($result);
//close conection
mysqli_close($conn);
//display the ingredients as a list
//print_r(explode(",",$pizzas[0]["ingredients"]))
//print_r(($pizzas))
?>
<!DOCTYPE html>
<html lang="en">
<?php include("header.php")?>
<h4 class="center grey-text">Pizzas</h4>
<div class="container">
    <div class="row">
       <?php foreach($pizzas as $pizza):?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card_content center">
                        <h6><?php echo htmlspecialchars($pizza["title"]);?></h6>
                        <ul>
                            <?php foreach(explode(',', $pizza["ingredients"]) as $ing):?>
                                <li><?php echo htmlspecialchars($ing);?></li>
                                <?php endforeach?>
                        </ul>
                    </div>
                    <div class="card_action right-align">
                        <a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">MORE INFO</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if(count($pizzas)>=3):?>
            <p>There are two or more pizzas</p>
            <?php  else:?>
                <p>There are less than 3 pizzas</p>
                <?php endif?>
    </div>
</div>
<?php include("footer.php")?>
</html> 