
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Admin</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="containerL">

      <div id="login">

        <h1>Login Admin</h1>

        <form action="<?php echo site_url('Admin/cek_login')?>" method="post">

          <fieldset class="clearfixL">

            <p><span class="fontawesome-user"></span><input type="text" name="email" placeholder="Email"></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="password" placeholder="Password"></p> 
            <p><input type="submit" value="Login"></p>

          </fieldset>

        </form>


      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>