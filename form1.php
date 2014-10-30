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

//if (!$year_results = mysqli_query($db_connection, $sql)){
//    die('There was an error running the query [' . mysqli_error($db_connection). ']');
//}

?>

<html>
<head>
    <script type="text/javascript">
        function doValidate() {
            // Validate the form data
            mileage = document.f1.mileage.value;
            if (isNaN(mileage) || mileage <= 0) {
                // Error mileage is invalid;
                return false;
            }
        }
    </script>
</head>
<body>
<form name="f1" mthod="Post" action="addcar.php" onSubmit="return doValidate()">
    <p>VIN: <input type="text" name="vin"/></p>
    <select name=""year">
        <option value="noSelect">Select a Year</option>
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