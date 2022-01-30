<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

body {
    /* The image used */
    background-image: url("http://cmusic.ml/scenery_for_song2.jpg");

    min-height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    position: absolute;
    top: 25%;
    right: 25%;
    margin: 20px;
    max-width: 50%;
    max-height: 50%;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
.btn-2 {
    background-color: #d04242;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>
<div class="bg-img">
  <form>
    <div class="container">
      <h1>Login</h1>

      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="usrn" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="pswd" required>
      <a href="">Forgot Password?</a>

      <button class="btn" onclick="validate()">Login</button>
      <br><br>
      <button type="submit" class="btn-2">Don't Have an Account? Sign Up!</button>
    </div>
  </form>
</div>
<script>
    //Temporary Until PHP Server
function validate(){
    var x = document.getElementById("usrn").innerHTML;
    var y = docuemnt.getElementById("pswd").innerHTML;
    if(x == "biancano"){
        if(y == "longgrass123"){
        window.location.href="http://thepotatoplace.ga/accounts/biancano/profile";
        }
    }
}
</script>
</body>
</html>
