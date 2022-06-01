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
    <title>Add Employee</title>
</head>
<body>
    <div class="login-box">

        <form method="post" action="#" >
            <h1>Enter Employee Detials</h1>
            <div class="textbox">
                <input type="text" placeholder="Name" name="ename" required>
            </div>
            <div class="textbox">
                <input type="number" placeholder="PhoneNumber" name="phone" required>
            </div>
            <div class="textbox">
                <select class="roles" style="background: none;width: 80%;border: none;margin: 0 8px;font-size: 18px;color: grey;" name="role" placeholder="Roles">
                <?php
                    $sql="select * from roles";
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
            <input class="btn" type="submit"/>
        </form>
    </div>

</body>
</html>

<?php
    $ename = $phone = $role='';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $ename=$_POST["ename"];
        $phone=$_POST["phone"];
        $password=$_POST["ename"];
        $role=$_POST["role"];
        $id = mysqli_fetch_row(mysqli_query($conn,"select max(id) from employees"));
        if($id==''){
            $id = 0;
        }
        
        $id = $id[0]+1;
        $sql = "insert into employees values('$ename','$id','$phone','$role','$password')";
        
        if($result = mysqli_query($conn,$sql)){
        }
    }
?>  