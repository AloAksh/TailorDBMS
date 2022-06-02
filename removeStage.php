<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Remove Stage</title>
</head>
<body>
    <div class="login-box">
        <form method="POST">
            <h1>Remove Stage</h1>
            <div class="textbox">
                <select style="background: none; width: 80%; border: none; margin:0 8px;font-size: 18px;color: grey;" name="id" placeholder="Role">
                <?php 
                    $sql="select * from stages";
                    if($result = mysqli_query($conn,$sql)){
                        while($row = mysqli_fetch_row($result)){
                            echo "<option value=$row[0]>$row[1]</option>";
                        }
                    }
                ?>
                </select>
            </div><br>
            <input class="btn" type="submit">
        </form>
    </div>
</body> 
</html>

<?php
    $id = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id = $_POST["id"];

        $delete = "delete from stages where id = '$id'";
        if($result  = mysqli_query($conn,$delete)){
        }
    }
?>
</body>
</html>