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
    <title>Update Customers</title>
</head>
<body>
<a class="butn" type="submit" href="index.html" style="text-decoration: none; margin-bottom:100px;">HOME</a>
    <div class="login-box">
        <form method="POST">
            <h1>Update Customer</h1>
            <div class="textbox">
                <input type="text" placeholder="Customer ID" name="id" required>
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

        $update = "update roles set role = '$rname' where id = '$old'";
        if($result  = mysqli_query($conn,$update)){
        }
    }
?> 