<!DOCTYPE html>
<html>
<head>
    <title>Message</title>
    
    <style type="text/css">
    table
    {
        border-collapse:collapse;
        width:87%;
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
    <th>From_id</th>
    <th>To-id</th>
    <th>From_name</th>
    <th>To-name</th>
    <th>Message</th>
    <th>Date_Time</th>
    <tr>
    <?php
    require("./config/config.php");
    $S_var='C1010';
    $query="SELECT * FROM  `messages` WHERE  `from_id_db`='$S_var'or `to_id_db`='$S_var' order by time_stanp_db desc ";
    $records=mysqli_query($con,$query);
    $num=mysqli_num_rows($records);
    if ($num>=1)
    {   $row=mysqli_fetch_array($records);
        echo "<tr>";
        echo "<td>" .$row['from_id_db']."</td>";
        echo "<td>" .$row['to_id_db']."</td>";
        echo "<td>" .$row['from_name_db']."</td>";
        echo "<td>" .$row['to_name_db']."</td>";
        echo "<td>" .$row['message_db']."</td>";
        echo "<td>" .$row['time_stanp_db']."</td>";
        echo "</tr>";
    }
    else
    {
        echo "no result";
    }       
    ?>
    </table>
</body>
</html>
