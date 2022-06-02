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
    <title>Display</title>
</head>
<body>
<a class="butn" type="submit" href="index.html" style="text-decoration: none; margin-bottom:100px;">HOME</a>
<div class="login-box">
    <form method="POST">
        <h1>Show Details</h1>
        <div class="textbox">
            <select style="background: none; width: 80%; border: none; margin:0 8px;font-size: 18px;color: grey;" name="table" placeholder="Table">
                <?php
                $sql="show tables";
                if($result=mysqli_query($conn,$sql)){
                    while($row=mysqli_fetch_row($result))
                    {
                        echo "<option value=$row[0]>$row[0]</option>";
                    }
                }
            ?>
        </select>
        </div><br>
        <input class="btn" type="submit">
        </form>
    </div>
</body>
</html>

<?php
    $table ='';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $table = $_POST["table"];
        $display = "select * from $table";
        $title = "desc $table";
        $size = mysqli_fetch_row(mysqli_query($conn, "select count(*) FROM INFORMATION_SCHEMA.COLUMNS where table_schema = 'tailor' AND table_name = '$table'"));
        
        if($result  = mysqli_query($conn,$display)){
            echo"<table border=1>"; 
            if($res=mysqli_query($conn,$title)){
                echo"<tr>";
                while($row=mysqli_fetch_row($res)){
                    echo"<th>"; echo"$row[0]"; echo"</th>";
                }
                echo"</tr>";
            }
            
            while($row=mysqli_fetch_row($result)){
                echo"<tr>";            
                for($num=0; $num<$size[0]; $num++){
                    echo"<td>"; echo "$row[$num]"; echo"</td>";
                }
                echo"</tr>";
        }
        echo"</table>";
        }
    }
?>