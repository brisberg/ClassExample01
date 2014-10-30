<?php include '_connect.php;' ?>
<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 10/29/2014
 * Time: 4:09 PM
 */

$vin = $_POST['vin'];
$year = $_POST['year'];
$mileage = $_POST['mileage'];

//Server side input validation
if ($mileage < 0) {
    exit();
}
if ($year < 1) {
    exit();
}

$sql = <<<SQL
INSERT INTO car_info (vin, year, mileage)
VALUES ('$vin', '$year', '$mileage');
SQL;

if (!$results = mysqli_query($db_connection, $sql)) {
    die('There was an error running the query [' . mysqli_error($db_connection) . ']');
}

var_dump($results);

?>