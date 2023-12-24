<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show massage</title>
    <style>
        .main_div{
            height:auto;
            width: 700px;
            border: 2px solid red;
            display: grid;
            grid-template-columns: auto auto;
        }
        .div_auto{
            border
        }
    </style>
</head>
<body>
    <?php
        include 'config.php';
        $sql="SELECT * FROM `contact` ORDER BY `id` DESC";
        $result= mysqli_query($con,$sql);
        ?>
            <table border=1 cellspacing="0" cellpadding="20px" style="text-align:center;">
            
            <tr>
            <td><h2>id</h2></td>
            <td><h2>name</h2></td>
            <td><h2>email</h2></td>
            <td><h2>phone</h2></td>
            <td><h2>massage</h2></td>
            <td><h2>Time</h2></td>
            <td><h2>DELETE</h2></td>
            </tr>
            <?php
        if(mysqli_num_rows($result)>0){ 
        while($row=mysqli_fetch_assoc($result)){
       
            $output = "
            <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['massage']}</td>
            <td>{$row['time']}</td>
            ";
            ?>
            <?php
            $output .="
            <td><a href='delete.php?id={$row["id"]}'><button type='submit' name='delete-btn'>Delete</button></a></td>
            <tr>
            ";
            echo $output;
        }
    }else{
        echo"<tr><td colspan='7'><b>No data found</b></td></tr>";
    }
        ?>
    </table>
</body>
</html>