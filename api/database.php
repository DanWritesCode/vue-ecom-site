<?php
require_once("config.php");

$conn = new mysqli(MYSQL_IP, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
if ($conn->connect_error) {
  renderError("Failed to connect to MYSQL database!");
}
