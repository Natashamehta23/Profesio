<!DOCTYPE html>
<html>
<head>
    <title>Notification</title>
    <style type="text/css">
    table
    {
        border-collapse:collapse;
        width:60%;
        colour:#588c7e;
        font-family:monospace;
        font-size:15px;
        text-align:left;

    }
    th
    {
        background-color:#d96459;
        color:white;
    }
    tr:nth-child(even){background-color:#f2f2f2}
    </style>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
    <tr>
    <th>Noti_id</th>
    <th>User_to</th>
    <th>User_from</th>
    <th>Message</th>
    <th>Date_Time</th>
    </tr>
    <?php
    require("./config/config.php");
    $S_var='E1';
    $query="SELECT * FROM  `notification` WHERE user_to_db='$S_var'";
    $records=mysqli_query($con,$query);
    $num=mysqli_num_rows($records);
    if ($num>=1)
    {   while($row=mysqli_fetch_array($records))
       { echo "<tr>";
        echo "<td>". $row['noti_id_db']."</td>";
        echo "<td>".$row['user_to_db']."</td>";
        echo "<td>".$row['user_from_db']."</td>";
        echo "<td>".$row['message_db']."</td>";
        echo "<td>".$row['date_time_db']."</td>";
        echo "</tr>";
        }
    
    }
    else
    {
        echo "no result";
    }       
    ?>
    </table>
</body>
</html>
