<?php
  if (session_id() == '') {
    echo "Does not yet exist";
    session_start();
  }
  else {
    echo "Already exists";
    header("Location: myResults.php");
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Survey page</title>
  <link rel="stylesheet" type="text/css" href="Survey.css">
  </head>
  <body>
  <div>
    <h1>What color of lightsaber do you have?</h1>
  </div>
  <div>
    <a href="myResults.php">Results page</a><br>
  </div>
  <div>
    <form method="post" action="myResults.php">
      Name:<input type="text" id=”name” name="name"><br><br>

      When it comes to being a jedi<br>
      <input type="radio" name="importance" value="Green" checked>Strength in the force is most important<br>
      <input type="radio" name="importance" value="Blue"> Skill with a lightsaber is most important<br>
      <input type="radio" name="importance" value="Purple"> Overpowering your opponent is most important<br>
      <input type="radio" name="importance" value="Orange"> Negotiation skills is most important<br><br>

      If you are confronted by a sith you<br>
      <input type="radio" name="personality" value="Orange" checked> Would reason with them<br>
      <input type="radio" name="personality" value="Purple"> Exert all your effort and ability to defeat them, even if it means getting a bit dark<br>
      <input type="radio" name="personality" value="Green"> Use the force to battle, turning to your lightsaber only if needed<br>
      <input type="radio" name="personality" value="Blue"> Battle them with your lightsaber<br><br>

      Who would you rather spend a day with<br>
      <input type="radio" name="roleModel" value="Purple" checked> Mace Windu<br>
      <input type="radio" name="roleModel" value="Green"> Luke Skywalker<br>
      <input type="radio" name="roleModel" value="Orange"> Plo Koon<br>
      <input type="radio" name="roleModel" value="Blue"> Obi Wan Kenobi<br><br>

      If you were a jedi you would be a<br>
      <input type="radio" name="class" value="Blue" checked> Jedi Guardian<br>
      <input type="radio" name="class" value="Orange"> Jedi Sentinal<br>
      <input type="radio" name="class" value="Purple"> Jedi, I don't need to belong to a class of jedi<br>
      <input type="radio" name="class" value="Green"> Jedi Consular<br><br>
      
      <input type="submit" value="Submit">

      <?php 
      $_SESSION["final"] = "Blue";
      $_SESSION["myName"] = "NOTHING";
      ?>

    </form>
  </div>
  </body>
</html>