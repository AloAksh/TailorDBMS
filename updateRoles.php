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
    <title>Update Role</title>
</head>
<body>
    <div class="login-box">
        <form method="POST">
            <h1>Update Role</h1>
            <div class="textbox">
                <select class="stages" style="background: none;width: 80%;border: none;margin: 0 8px;font-size: 18px;color: grey;" name="old" placeholder="Old Role Name">
                <?php
                    $sql="select * from roles";
                    if($result = mysqli_query($conn,$sql)){
                        while($row = mysqli_fetch_row($result)){
                            echo "<option value=$row[0]>$row[0]</option>";
                        }
                    }
                ?>
                </select>
            </div>
            <div class="textbox">
                <input type="text" placeholder="New Role" name="rname" required>
            </div>
            <input class="btn" type="submit">
        </form>
    </div>
</body> 
</html>

<?php
    $rname = $old = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $rname = $_POST["rname"];
        $old = $_POST["old"];

        $update = "update roles set role = '$rname' where role = '$old'";
        if($result  = mysqli_query($conn,$update)){
        }
    }
?>