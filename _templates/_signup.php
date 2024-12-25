<?
include '../libs/load.php';
include ' libs/includes/user.class.php';
$signup=false;
//print_r($_POST);

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['emailid']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $email = $_POST['emailid'];
  $error = user::signup($username, $phone, $email, $password );
  $signup=true;
}
?>
<?php
    if ($signup) {
        if (!$error) {
        ?>
<main class="flex-shrink-0">
    <div class="container">
        <h1>Signup Success</h1>
        <p class="lead">Now you can login <a href="login.php">here</a>.</p>
    </div>
</main>
<?php
        } else {
            ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Fail</h1>
        <p class="lead">Something went wrong, <?=$error?>
        </p>
    </div>
</main>
<?php
    }
  } 
else 
{
?>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signup w-100">
  <form method="post" action="signup.php">
    <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text.svg" alt="" height="50">
    <h1 class="h3 mb-3 fw-normal">Please signup</h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInputusername" placeholder="usename">
      <label for="floatingInputusername">Username</label>
    </div>

    <div class="form-floating">
      <input type="text" name="phone" class="form-control" id="floatingInputphone" placeholder="Phone No">
      <label for="floatingInputphone">Phone No</label>
    </div>

    <div class="form-floating">
      <input type="email" name="emailid" class="form-control" id="floatingInputemailid" placeholder="name@example.com">
      <label for="floatingInputemailid">Email id</label>
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 " class="hvr-wobble-vertical"  type="submit">Sign in</button>
    </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
<?
    }
?>