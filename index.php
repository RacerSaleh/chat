<?php
  include 'database.php';
?>

<?php
  $query = "SELECT * FROM shouts";
  $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shout It!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>

  <body>
    <div id="container">
      <header>
        <h1>ShoutBox</h1>
      </header>
      <br>
      <div id="shouts">
        <ul>
          <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <li class="shout"><span><?php echo $row['time']; ?> - </span>
                              <strong><?php echo $row['user']; ?> :</strong>
                                    <?php echo $row['message']; ?>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <br/>
      <div id="input">
        <?php if(isset($_GET['error'])) : ?>
          <div class="error"> <?php echo $_GET['error']; ?> </div>
        <?php endif; ?>
        <form class="" action="process.php" method="post">
          <input type="text" name="user" placeholder="Enter your Name " value="">
          <input type="text" name="message" placeholder="Enter your message " value="">
          <br/>
          <input class="shout-btn" type="submit" name="submit" value="Shout it Out!">
        </form>
      </div>
    </div>
  </body>
</html>
