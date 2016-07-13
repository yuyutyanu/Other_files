<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="./login.css" media="screen" title="no title" charset="utf-8">
    	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js" charset="utf-8"></script>
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.js" charset="utf-8"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" media="screen" title="no title" charset="utf-8">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.js" charset="utf-8"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
      <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>

<body>
  <div id="memreg_main">
    <div class="memreg_header">
      <button id="loginpage_back">Loginpage</button>
    </div>
    <h1>Registration page</h1>
    <h3>
Register by checking the e-mail is completed
    </h3>
    <form class="" action="index.html" method="post">
      <input type="text" name="name" placeholder="ID"><br>
      <input type="text" name="name" placeholder="password"><br>
      <input type="email" placeholder="mailaddress"><br>
      <input type="submit" name="name" value="send" id="reg_submit">
    </form>
    </div>
<div class="login_header">
  <nav>
    <ul>
      <div class="registration">
  <button id="memreg_button" href="#">Member registration</button>
      </div>
    </ul>
  </nav>
</div>

  <div class="main" id="main">
    <p id="name">Welcome! {{name}}</p>
    <h1 id="logintext" data-in-effect="fadeIn">Please login...</h1>
    <form class="" action="../photo/photo.php" method="post">
        <input type="text" name="name" v-model="name" placeholder="id">
        <br>
        <input type="password" name="name" placeholder="password" id="pass">
        <input type="submit" value="login">
    </form>
  </div>
  <script src="./login.js" charset="utf-8"></script>
</body>

</html>
