<?php include '_connect.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 10/29/2014
 * Time: 3:51 PM
 */

$sql = <<<SQL
SELECT * FROM year;
SQL;

if (!$year_results = mysqli_query($db_connection, $sql)){
    die('There was an error running the query [' . mysqli_error($db_connection). ']');
}

?>

<html>
<body>
<form name="f1" mthod="Post" action="addcar.php">
    <p>VIN: <input type="text" name="vin"/></p>
    <select name=""year">
    <?php
        while ($row = mysqli_fetch_array($results)) {
            echo '<option value="' . $row['year'] . '">' . $row['year']. "</option>";
        }
    ?></select>
    <p>Mileage: <input type="text" name="mileage"/></p>
    <p><input type="submit" name="submit"/></p>
</form>
</body>
</html>