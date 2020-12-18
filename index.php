<?php
  if($_SERVER["HTTPS"] != "on")
  {
      header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
      exit();
  }
  else
  {
    include_once("index.html");
  }
?>