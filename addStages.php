<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stage</title>
</head>
<body>
    <form method="POST">
        Enter the Name of the New Stage<br><br>
        Stage Name: <input type="text" placeholder="New Stage" name="sname" required><br><br>
        <br><br><input type="submit"><br>
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
        $sql = "insert into stages values('$sname','$id')";
        
        if($result = mysqli_query($conn,$sql)){
            echo "Inserted Successfully"; 
        }
    }
?>  