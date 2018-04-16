<?php
  define("DB_SERVER","us-cdbr-iron-east-05.cleardb.net");
  define("DB_USER", "bcad23e75a1ca4");
  define("DB_PASS", "f34527b1");
  define("DB_NAME", "heroku_437a510ac474dbe");

//Making connection to database
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  // Test if connection succeeded.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
    mysqli_connect_error() .
    " (" .mysqli_connect_errno() . ")"
  );
}
