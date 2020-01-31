<?php include 'database.php';?>
<?php


$sqld="DROP TABLE  `Chat`.`Online`";
$sql = "CREATE TABLE `Chat`.`Online` ( `SNO` SERIAL NOT NULL , `USER_NAME` VARCHAR(200) NOT NULL , `ACTIVE` INT(4) NOT NULL DEFAULT '1' ) ENGINE = InnoDB;";

// sql to create table
if ($connect->query($sqld) === TRUE) {
    echo "Table USER_INFO deleted successfully";
} else {
    echo "Error deleted  table:USER_INFO " . $connect->error;
}

if ($connect->query($sql) === TRUE) {
    echo "Table USER_INFO created successfully";
} else {
    echo "Error creating table:USER_INFO " . $connect->error;
}


$connect->close();

?>