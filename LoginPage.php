<?php
session_start();

$evdb = mysqli_connect("localhost", "twininga_wrdp1", "Stingray69") or die (mysqli_error());		//MUST HAVE "LOCALHOST" AND "ROOT"
mysqli_select_db($evdb, "twininga_everythingnice");


$username = $_POST['username'];
$password = $_POST['password'];
$status = "";
//$_SESSION["AdminMarker"]="butt";
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $About = $_POST['about'];



$result = mysqli_query( $evdb, "SELECT * FROM user WHERE Username='$username' AND Password='$password' ");
$num_rows = mysqli_num_rows($result);
//$row = mysql_fetch_assoc($result);

if($num_rows>=1)
{
  while ($row = mysqli_fetch_assoc($result))
  {
      $status = $row['AdminStatus'];
  }
  //$status=$result['AdminStatus'];

  //echo $status;
  if($status == '1')
  {
    $_SESSION["AdminMarker"]=1;
    header('Location: AdminHomepage.php');
  } else
  {
    $_SESSION["AdminMarker"]=0;
    header('Location: Homepage.php');
  }

} elseif ($num_rows<1)
{
  echo "Incorrect password or username.   <a href='LoginPagePrompt.php'>Please try again.</a>";
  //include('Location: LoginPagePrompt.php');
}


    // output data of each row
    // while($row = mysql_fetch_assoc($result)) {
    //     echo "id: " . $row["ID"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"].
		// " - First: " . $row["Firstname"]. " - Last: " . $row["Lastname"]. " - About: " . $row["About"].
    //
		// "<br><br>";
    // }


 ?>
