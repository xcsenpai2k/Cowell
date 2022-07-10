<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="http://cowell.local.com/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../asset/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="signin-process.php" method="post">
    <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="login-id" class="form-control 
      <?php
        if(isset($_SESSION['errors']['login-id'])): ?> 
          is-invalid 
      <?php endif ?>" id="floatingInput" placeholder="name@example.com" value="
      <?php
        if(isset($_SESSION['old'])){  
          echo $_SESSION['old']['login-id'];     
      } ?>">
      <label for="floatingInput">Email address</label>
      <?php
        if(isset($_SESSION['errors']['login-id'])): ?> 
          <div id="floatingInput" class="invalid-feedback">
            <?php echo $_SESSION['errors']['login-id'] ?>
          </div>
      <?php endif ?>
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control 
      <?php
        if(isset($_SESSION['errors']['password'])): ?> 
          is-invalid 
      <?php endif ?>" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <?php
        if(isset($_SESSION['errors']['password'])): ?> 
          <div class="invalid-feedback">
            <?php echo $_SESSION['errors']['password'] ?>
          </div>
      <?php endif ?>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <a class="w-100" href="signup.php">Sign up</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>
    
</body>
</html>
<?php unset($_SESSION['errors']['login-id']) ?>
<?php unset($_SESSION['errors']['password']) ?>
<?php unset($_SESSION['old']) ?>
