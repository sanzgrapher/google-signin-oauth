<?php
session_start();

include "config.php";


#!
// if (isset($_SESSION["username"]) OR isset($_SESSION["user_token"])) {
//   header("Location: {$hostname}/dashboard/index.php");
// }











?>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/google/new-folder/google-api/vendor/autoload.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/google-api/vendor/autoload.php';


require './sociallogin.php'
?>


<form class="row g-3 needs-validation" novalidate method="POST" action="login_register.php">
 



  <div class="col-12">
    <?php
    echo "<a class='btn btn-danger w-100' href='" . $client->createAuthUrl() . "'>Login With Google <i class='bi bi-google'></i></a>";
    ?>
  </div>

 
</form>