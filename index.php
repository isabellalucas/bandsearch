<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Musicians</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="pointer.js"></script>
    <script type="text/javascript" src="app.js"></script>

  </head>
  <body>

    <div class="wrapper">
      <h1>The Best Musicians and Bands</h1>

      <div class="form-container">
        <h2>Add a New Artist:</h2>
        <!-- Note that we're not using the action to submit this form. -->
        <form action="" method="post">

            <label>
              Name:
              <input type="text" name="name">
            </label>
            <label>
              Description:
              <textarea name="description"></textarea>
            </label>
            <label>
              Embed code for player:
              <textarea name="player"></textarea>
            </label>
            <input type="submit" value="submit">

        </form>
      </div>

      <div class="chooser-container">
        <h2>Choose an Artist to Listen to:</h2>
        <ul class="chooser">
          <!-- Populate this using AJAX -->

        </ul>
      </div>

      <div class="band-info">
        <h2></h2>
        <p></p>
        <div class="player-container">
          <!-- Populate this using AJAX -->
        </div>
      </div>
    </div>

      <!-- mouse pointer -->
      <object class="pointer" type="image/svg+xml" data="gamepad.svg"></object>

  </body>
</html>
