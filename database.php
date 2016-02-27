<?php
  $con = mysqli_connect("localhost","root","","shoutit");

  if (mysqli_connect_errno()) {
    echo "Failed to connect with database".mysqli_connect_error();
  }
?>
