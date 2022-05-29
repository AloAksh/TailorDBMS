<?php
    include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <form method="post">
        Enter Customer Details<br><br>
        Name:<input type="text" placeholder="Customer Name" name="cname" required><br>
        Phone:<input type="number" placeholder="Phone Number" name="phone" required> <br>
        Address:<input type="text" placeholder="Address" name="address" required>
        <br><br><input type="submit">
    </form>
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