<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="css/animate.min.css">

  </head>
  <body>

    <!-- HEADER -->

    <div class="form-header" id="patrice-header">

      <div class="navbar">

        <?php $current = 'about'; include("includes/menu.php"); ?>

      </div>

        <h1>Sign up for the newsletter!</h1>

    </div>

    <div class="form">
      <div class="container">

        <h1>Sign up for our newsletter to get weekly updates on all news M3!</h1>

        <form action="insert.php" method="post">

          Name: <input type="text" name="name" /><br><br>
          Email: <input type="text" name="email" /><br><br>
          <input type="submit" />

        </form>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script type="text/javascript">
      var typed = new Typed('.typed', {
      strings: ["Hi, I'm Patrice!"],
      typeSpeed: 100,
  		showCursor: true,
      });
    </script>

  </body>
</html>
