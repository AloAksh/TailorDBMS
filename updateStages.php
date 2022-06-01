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
    <title>Update Stage</title>
</head>
<body>
    <div class="login-box">
        <form method="POST">
            <h1>Update Stage</h1>
            <div class="textbox">
                <select class="stages" style="background: none;width: 80%;border: none;margin: 0 8px;font-size: 18px;color: grey;" name="old" placeholder="Old Stage Name">
                <?php
                    $sql="select * from stages";
                    if($result = mysqli_query($conn,$sql)){
                        while($row = mysqli_fetch_row($result)){
                            echo "<option value=$row[1]>$row[1]</option>";
                        }
                    }
                ?>
                </select>
            </div>
            <div class="textbox">
                <input type="text" placeholder="New Stage" name="sname" required>
            </div>
            <input class="btn" type="submit">
        </form>
    </div>
</body> 
</html>

<?php
    $sname = $old = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sname = $_POST["sname"];
        $old = $_POST["old"];
        $update = "update stages set stage = '$sname' where stage = '$old'";
        if($result  = mysqli_query($conn,$update)){
        }
    }
?>