<?php

$evdb = mysqli_connect("localhost", "root") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "evdb");

if(isset($_POST['from'], $_POST['to'])) {

$from_date = $_POST['from'];
$to_date = $_POST['to'];

//echo "The first date is {$from_date} and the second date is {$to_date}";
}

$sql = "
SELECT *
FROM revenue
WHERE date BETWEEN '$from_date' AND '$to_date'";

if(mysqli_query($evdb, $sql)){
    print "  .". "<br><br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($evdb);
}

$result = mysqli_query($evdb, $sql);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID ". $row["Rev_ID"]. " - Date: " . $row["date"]. "<br><br>";}

?>
