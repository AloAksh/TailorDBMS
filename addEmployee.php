<?php
    include ("connect.php");

    // if ($result = $mysqli -> query($sql)) {
    //     while ($row = $result -> fetch_row()) {
    //       printf ("%s (%s)\n", $row[0], $row[1]);
    //     }
    //     $result -> free_result();
    //   }
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
    <div style="justify-content: center;">
        Enter Employee Details<br><br>    
        Name:<input type="text" placeholder="Name" name="ename"><br>
        Phone: <input type="number" placeholder="Phone Number" name="phone"><br>
        : </b><input type="text" placeholder="Author" name="author"><br><br>

        <select name="pets" id="pet-select">
            
        </select>
        <?php 
                $sqli =  "select * from roles"; 
                $result = mysqli_query($conn, $sqli);
                echo $result;
            ?>
            
        <input type="submit">
    </div>

</body>
</html>