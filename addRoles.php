<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Role</title>
</head>
<body>
    <form method="POST">
        Enter the Name of the New role
        Role Name: <input type="text" placeholder="New Role" name="rname" required>
        <br><br><input type="submit">
</body>
</html>

<?php
    $rname = '';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $rname=$_POST["rname"];
        $id = mysqli_fetch_row(mysqli_query($conn,"select max(id) from roles"));
        echo "$rname,$id[0]";
        
        if($id==''){
            $id = 0;
        }
        
        $id = $id[0]+1;
        $sql = "insert into roles values('$rname','$id')";
        
        if($result = mysqli_query($conn,$sql)){
            echo "Inserted Successfully"; 
        }
    }
?>  