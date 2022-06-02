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

    <title>CreateOrder</title>
</head>
<body>
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
                    <label for="orderDate">Date of Order:</label>
                    <input id="orderDate" type="date" placeholder="Date of order" name="orderDate"></input>
                </div>
                <div class="textbox">
                    <label for="orderDate">Due of Order:</label>
                    <input id="orderDate" type="date" placeholder="Date of order" name="dueDate"></input>
                </div>
                <div class="textbox">
                    <label for="qty">Order Quantity:</label>
                    <input id="qty" type="number" placeholder="Quantity" name="qty"></input>
                </div>
                <div class="textbox">
                    <label for="w">Order Description:</label>
                    <textarea id="w" placeholder="Description" name="desc" rows="10" cols="50"></textarea>
                </div>
                <div class="textbox">
                    <label for="Stage">Order stage:</label>
                    <select id="stage"  name="stage" placeholder="Stages">
                        <?php
                            $sql="select * from stages";
                            if($result=mysqli_query($conn,$sql))
                            {
                                while($row=mysqli_fetch_row($result))
                                {
                                    echo "<option value=$row[0]>$row[1]</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="textbox">
                    <label for="handler">Order Handler:</label>
                    <select id="handler"  name="handler" placeholder="Roles">
                        <?php
                            $sql="select * from employees";
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
                <input type="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $custid=$_POST["customer"];
    $doo=$_POST["orderDate"];
    $dueDate=$_POST["dueDate"];
    $qty=$_POST["qty"];
    $desc=$_POST["desc"];
    $stage=$_POST["stage"];
    $handler=$_POST["handler"];

    echo $custid,$doo,$dueDate,$qty,$desc,$stage,$handler;
}

?>