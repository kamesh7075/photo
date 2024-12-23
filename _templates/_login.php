<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>
<?
 $username = $_POST['mail_addr'];
 $password = $_POST['password'];

$res = validate_credentials($username, $password);
if($res)
{
  ?>
  <main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Login Success</h1>
    <p class="lead">First Login Page tried.</p>
  </div>
</main>
  <?
}
if($res == false)
{     
?>   
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    

<div id="wrapper">    
<main class="form-signin w-100">
  <form method="post" action="login.php">
    <img class="mb-4" src="https://labs.selfmade.ninja/assets/brand/logo-text.svg" alt="" height="50">
    <h1 class="h3 mb-3 fw-normal">Please Log in</h1>

    <div class="form-floating">
      <input type="email" name="mail_addr" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
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
    <button class="btn btn-primary w-100 py-2 " class="hvr-wobble-vertical"  type="submit">Log in</button>
    </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </div>
   <!-- <?
       if($res == false)
       {
        echo "login failed";
       }  

   ?> -->
  </body>
</html>
<?
}
// if($res == false)
// {
//  echo "login failed";
// }  
?>