

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="description" content="Ali Malik is a Full Stack Developer. In their journey as a freelancer, website designer, and developer nearly 5 years ago, Ali Malik has done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. Ali Malik is quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.">
  <meta name="keywords" content="Ali Malik Website developer, Ali Malik Website Designer,Ali Malik Web Designer, Ali Malik Web Developer, Ali Malik Talagang, Ali Malik PHP Developer, Ali Website Developer, Ali Website Designer, Ali Web Developer, Ali Web Designer, Ali Freelancer, Ali Talagang Developer, Ali Chakwal Web Developer, Ali Talagang PHP Developer, Ali Talagang Website Porgrammer, Ali Malik Talagang, Ali Website Developer from talagang, Ali Web Designer from talagang, ali malik website developer, ali professional website designer and developer, ali malik website developer talaganga, ali malik professional developer talagang, professional developers from talagang, programmer from talagang, developer from talagang chakwal, website developer talagang chakwal, website designer talagang, professional designer talagang, Ali Malik, Ali Malik Full stack developer, Full stack developer, Full stack developer talagang, Full stack developer Chakwal, Full Stack Web Developer Talagang">
  <meta name="author" content="Ali Malik Full stack Developer">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#2B2B35">
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <title>Ali Malik Professional Website Developer & Designer</title>
</head>

<?php 
include "db.php";

$user_ip=$_SERVER['REMOTE_ADDR'];
$query_userip = "SELECT * FROM website_visitor WHERE ip_address='$user_ip'";
$result_userip = mysqli_query($conn, $query_userip);  
if ($result_userip->num_rows > 0) {
	?>

  <script type="text/javascript">
    window.location.href='home.html';
  </script>
  <?php
}
else{
date_default_timezone_set("Asia/Karachi");
$date=date('d-m-Y h:i:s');

 $userip_query="INSERT INTO website_visitor(ip_address,date) 
  VALUES('$user_ip','$date')";
  mysqli_query($conn,$userip_query);
    ?>

  <script type="text/javascript">
    window.location.href='home.html';
  </script>
  <?php
}