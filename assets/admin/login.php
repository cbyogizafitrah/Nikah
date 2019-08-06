<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Admin</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

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

        <form action="javascript:void(0);" method="get">

          <fieldset class="clearfixL">

            <p><span class="fontawesome-user"></span><input type="text" value="Nama" onBlur="if(this.value == '') this.value = 'Nama'" onFocus="if(this.value == 'Nama') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Login"></p>

          </fieldset>

        </form>


      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>