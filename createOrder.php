<?php
    include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addorder.css">
    <link rel="stylesheet" href="style.css">

    <title>CreateOrder</title>
</head>
<body>
<a class="butn" type="submit" href="index.html" style="text-decoration: none; margin-bottom:100px;">HOME</a>
    <div class="sec">
        <div class="form">
            <div class="title">
                <h1>Create New Order</h1>
            </div>
            <form action="#" method="post">
                <div class="textbox" >
                    <label for="customer">Select the customer:</label>
                    <select id="customer"  name="customer" placeholder="Roles">
                        <?php
                            $sql="select * from customers";
                            if($result=mysqli_query($conn,$sql))
                            {
                                while($row=mysqli_fetch_row($result))
                                {
                                    echo "<option value=$row[1]>$row[0]</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="textbox">
                    <label for="orderDate">Order Date:</label>
                    <input type="date" placeholder="Date of order" name="orderDate"></input>
                </div>
                <div class="textbox">
                    <label for="orderDate">Due Date:</label>
                    <input id="orderDate" type="date" placeholder="Date of order" name="dueDate"></input>
                </div>
                <div class="textbox">
                    <label for="qty">Order Quantity:</label>
                    <input id="qty" type="number" placeholder="Quantity" name="qty"></input>
                </div>
                <div class="textbox">
                    <label for="w">Order Description:</label>
                    <textarea id="w" placeholder="Description" name="desc" rows="6" cols="50"></textarea>
                </div>
                <input type="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $custid=$_POST["customer"];
    $orderDate=$_POST["orderDate"];
    $dueDate=$_POST["dueDate"];
    $qty=$_POST["qty"];
    $description=$_POST["desc"];

    $insert = "insert into orders (order_date, due, quantity, cust_id, description) values ($orderDate, $dueDate, $qty, $custid, $description)";
    echo $custid,$orderDate,$dueDate,$qty,$description;
    if($result = mysqli_query($conn, $insert)){
    }
}

?>