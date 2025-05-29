<html lang="en">
    <head>
        <title>login</title>
        <link rel="stylesheet" href="./pet.css"> 
   </head>
   <body>
    <div class="main">
    <div class="form-box active" id="login-form">
        <form action="" method="post">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="enter username" required>
        <input type="password" name="password" placeholder=" enter Password" required>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="#" onclick="showform('sign-up-form')">Sign-up</a>
      
    </form>
    </div>
    </div>
    <div class="form-box" id="sign-up-form">
        <form action="" method="post">
        <h2>sign-up</h2>
        <input type="text" name="username" placeholder="username" required>
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm password" placeholder="confirm Password" required>
        <button type="submit" name="sign-up">sign-up</button>
        <p>already have an account<a href="#" onclick="showform('login-form')">  login</a></p>
    </form>
    </div>
    <script src="./script.js"></script>
 </body>
   </html>
   