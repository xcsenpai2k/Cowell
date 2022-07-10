<?php 
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register</title>

    <link rel="canonical" href="http://dummy-host.example.com/">



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

        .container {
            max-width: 960px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../../asset/css/login.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin">
        <form class="needs-validation" novalidate="" action="signup-process.php" method="post">
            <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            <div class="col-md-12 col-lg-12">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="fullName" class="form-label">Full name</label>
                        <input type="text" name="name" class="form-control 
                        <?php if (isset($_SESSION['error']['fullName'])) : ?>
                            is-invalid
                        <?php endif ?>" id="fullName" placeholder="Name" value="
                        <?php echo (isset($_SESSION['old']['fullName']) ? $_SESSION['old']['fullName'] : "") ?>">
                        <div class="invalid-feedback">
                            <?php echo $_SESSION['error']['fullName']; ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</span></label>
                        <input type="email" name="email" class="form-control 
                        <?php if (isset($_SESSION['error']['email'])) : ?>
                            is-invalid
                        <?php endif ?>" id="email" placeholder="you@example.com" value="
                        <?php echo (isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] : "") ?>">
                        <div class="invalid-feedback">
                            <?php echo $_SESSION['error']['email']; ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="floatingPassword">Password</label>
                        <input type="password" name="password" class="form-control 
                        <?php if (isset($_SESSION['error']['password'])) : ?>
                            is-invalid
                        <?php endif ?>" id="password" placeholder="Password">
                        <div class="invalid-feedback">
                            <?php echo $_SESSION['error']['password']; ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="birthday">Birthday</label>
                        <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Birthday">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control 
                        <?php if (isset($_SESSION['error']['address'])) : ?>
                            is-invalid
                        <?php endif ?>"" id="address" placeholder="1234 Main St">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                </div>
                <button class="mt-3 w-100 btn btn-primary btn-lg" type="submit">Sign up</button>
                <p class="mt-3 mb-3 text-muted">&copy; 2017–2021</p>
                <?php
                if (isset($_SESSION['error'])) {
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['old'])) {
                    unset($_SESSION['old']);
                }
                ?>
                <a class="w-100" href="signup.php">Sign up</a>
            </div>
        </form>
        
    </main>

</body>

</html>
<!--  -->