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
    <title>Add Customer</title>
</head>
<body>
    <a class="butn" type="submit" href="index.html" style="text-decoration: none; margin-bottom:100px;">HOME</button> 
    <div class="login-box">
        <form method="post">
                <h1>Customer Details</h1>
                <div class="textbox">
                    <input type="text" placeholder="Customer Name" name="cname" required>
                </div>
                <div class="textbox">
                    <input type="number" placeholder="Phone Number" name="phone" required>
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Address" name="address" required>
                </div><br>
                <input class="btn" type="submit">
            </div>
        </form>
    </div>
</body>
</html>


<?php
    $cname = $phone = $address = $id = '';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cname = $_POST["cname"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $id = mysqli_fetch_row(mysqli_query($conn,"select max(id) from customers"));

        echo "$cname,$phone,$address";

        if($id==''){
            $id=0;
        }

        $id = $id[0]+1;
        $insert = "insert into customers values('$cname','$id','$phone','$address')";
        
        if(mysqli_query($conn,$insert)){
            echo "Inserted Successfully";
        }
    }
?>