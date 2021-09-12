<?php
if(isset($_POST['search-submit'])){
require 'dbh.inc.php';
$searchvar=$_POST['search'];
echo $searchvar;
}