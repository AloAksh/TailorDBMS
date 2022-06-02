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
    <title>Remove Employee</title>
</head>
<body>
    <div class="login-box">
        <form method="POST">
            <h1>Remove Employee</h1>
            <div class="textbox">
                <input type="text" name="ename" placeholder="Employee Name">
            </div>
            <div class="textbox">
                <input type="number" name="id" placeholder="Employee ID">
            </div><br>
            <input class="btn" type="submit">
        </form>
    </div>
</body> 
</html>

<?php
    $id = $ename = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id = $_POST["id"];
        $ename = $_POST["ename"];

        $delete = "delete from employees where id = '$id'";
        if($result  = mysqli_query($conn,$delete)){
        }
    }
?>
</body>
</html>