<?php
    include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    
    <form method="post" action="#" >
        Enter Employee Details <br><br>
        Name:<input type="text" placeholder="Name" name="ename" required><br>
        Phone:<input type="number" placeholder="Phone Number" name="phone" required><br>
        Password:<input type="text" placeholder="Password" name="password" required><br>
        Role:<select name="role" placeholder="Roles"><br><
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
        <input type="submit"/>
    </form>

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
        echo "$ename,$phone,$role,$id[0]";
        
        if($id==''){
            $id = 0;
        }
        
        $id = $id[0]+1;
        $sql = "insert into employees values('$name','$id','$phone','$role','$password')";
        
        if($result = mysqli_query($conn,$sql)){
            echo "Inserted Successfully"; 
        }
    }
?>  