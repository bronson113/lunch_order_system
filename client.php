<?php
  if (!$_GET[order_date]){
    printf("please choose the a date");
    exit();
  }
  else if ($_GET[seatNumber]==0){
    printf("please enter your seat number");
    exit();
  }
  else if ($_GET[orders]==0){
    printf("please choose what to eat");
    exit();
  }
  $mysqli = new mysqli("den1.mysql6.gear.host", "orderhistory", "Mk6925?Wx?43", "orderhistory");
  if ($mysqli->connect_errno){
    printf("no connection: %s\n", $mysqli->connect_error);
    exit();
  }
  $mysqli->select_db("orderhistory");
  $sql = "INSERT INTO everyonesorder (order_date, seatNumber, orders) VALUES ('$_GET[order_date]','$_GET[seatNumber]','$_GET[orders]')";
  if (!$mysqli->query($sql)){
    printf("error: %s\n", $mysqli->error);
    exit();
  }
  else printf("Your order has been sended");
  $mysqli->close();
?>
