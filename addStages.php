<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Stage</title>
</head>
<body>
<a class="butn" type="submit" href="index.html" style="text-decoration: none; margin-bottom:100px;">HOME</a>
    <div class="login-box">
        <form method="POST">
            <h1>Create Stage</h1>
            <div class="textbox">
                <input type="text" placeholder="New Stage" name="sname" required>
            </div><br>
            <input class="btn" type="submit">
        </form>
    </div>
</body>
</html>

<?php
    $sname = '';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sname=$_POST["sname"];
        $id = mysqli_fetch_row(mysqli_query($conn,"select max(id) from stages"));
        echo "$sname,$id[0]";

        if($id==''){
            $id = 0;
        }
        $id = $id[0]+1;
        $sql = "insert into stages values('$id','$sname')";
        
        if($result = mysqli_query($conn,$sql)){
            echo "Inserted Successfully"; 
        }
    }
?>  