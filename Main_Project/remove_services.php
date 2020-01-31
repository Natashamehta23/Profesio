<?php
require('config/config.php');
if(service_successful)
    {
        $query="DELETE from services where cust_id_db='$client_id' AND emp_id_db='$emp_id'";
        $success=mysqli_query($query);"
    }

