<?php
  echo "hi";
  $mysqli = new mysqli("den1.mysql6.gear.host", "orderhistory", "Mk6925?Wx?43", "lunch_orders");
  if ($mysqli->connect_errno){
    printf("no connection: %s\n", $mysqli->connect_error);
    exit();
  }
  $mysqli->select_db("everyonesorder");
  $sql = "INSERT INTO everyonesorder (order_date, seatNumber, orders) VALUES ('$_GET[order_date]','$_GET[seatNumber]','$_GET[orders]')";
  if (!$mysqli->query($sql)){
    echo "no 2";
    die("error:".mysqli_error($con));
  }
  else echo "added";
  $mysqli->close();
?>

<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->query("SET a=1")) {
    printf("Errormessage: %s\n", $mysqli->error);
}

/* close connection */
$mysqli->close();
?>
