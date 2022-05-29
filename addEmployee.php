<?php
    include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employe</title>
</head>
<body>
    
    <form>
        Enter Employee Details 
        Name:<input type="text" placeholder="Name" name="ename">
        Phone:<input type="number" placeholder="Phone Number" name="phone">
        Role:<select name="role">
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
    </form>

</body>
</html>