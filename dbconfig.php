<?php

 
// Developement Database Connection
// $server_name = "localhost";
// $db_username = "root";
// $db_password = "";
// $db_name = "db_contact";

// Remote Database Connection
$server_name = "remotemysql.com";
$db_username = " jJINFaqynM";
$db_password = "M8zPf37EvR";
$db_name = "jJINFaqynM";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
  die("Connection failed: " . mysqli_connect_error());
  echo '
      <div class="container">
          <div class="row">
              <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                  <div class="card">
                      <div class="card-body">
                          <h1 class="card-title bg-danger text-white"> Database Connection Failed </h1>
                          <h2 class="card-title"> Database Failure</h2>
                          <p class="card-text"> Please Check Your Database Connection.</p>
                          <a href="#" class="btn btn-primary">:( </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  ';
}
?>
