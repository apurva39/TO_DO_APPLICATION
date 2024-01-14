<?php 
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo List</title>
</head>

<body>
    <h2 class="top-heading">Todo List Application</h2>
    <div class="container" style="display: flex;flex-direction: column;">
        <form action="handleActions.php" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox" placeholder="Add a new task">
                <button type="submit" name="add" id="add">Add</button>
            </div>
        


        <ul class="list">
            <?php 
            $itemList=get_items();
            while($row=$itemList->fetch_assoc())
            {

            
            
            ?>
            <li class="item">
                <p><?php echo $row["item"]; ?>
                
                </p>
                <div class="icon-container">
                    <button type="submit" name="checked" id="checked" value="<?php echo $row["id"]; ?>"><i class="fas fa-solid fa-circle-check"></i></button>
                    <button type="submit" name="deleted" id="deleted" value="<?php echo $row["id"]; ?>"><i class="fas fa-solid fa-trash"></i></button>
                </div>
            </li>
            <?php } ?>
        </ul>
        
        

        <ul class="list">
        <?php 
            $itemList=get_items_checked();
            while($row=$itemList->fetch_assoc())
            {
        ?>        

            <li class="item fade">
                <p class="deleted-text"><span><?php echo $row["item"]; ?></span></p>
                <div class="icon-container">
                    <button type="submit" name="checked" id="checked"  value="<?php echo $row["id"]; ?>"><i class=" fas fa-solid fa-circle-check hidden"></i></button>
                    <button type="submit" name="deleted" id="deleted" value="<?php echo $row["id"]; ?>"><i class="fas fa-solid fa-trash"></i></button>
                </div>
            </li>
            <?php } ?>

        </ul>
    </div>
</form>
</body>

</div>
<script src="https://kit.fontawesome.com/da55eaefc3.js" crossorigin="anonymous"></script>
</body>

</html>