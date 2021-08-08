<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<title>CPU Memory Data</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="cssf1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
/* latin-ext */
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: "Lato", sans-serif;
font-size: 17px;
text-align: center;
}
th {
background-color: black;
color: white;
}
body {
    background-image:url("blurred.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.transp {
    background-color: rgba(255,255,255,0.2);
    color: white;
}
</style>
<body>
<?php

$hostname = "localhost";
$username = "root";
$password = "1948@Dinamo";
$db = "pex";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>
<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-blue crs-card">
    <a href="system.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">CPU System Informations</a>
    <a href="process.php" class="crs-bar-item crs-button crs-padding-large crs-hover-grey">CPU Processes Information</a> 
    <a href="home.php" class="crs-bar-item crs-button crs-padding-large crs-hover-red crs-right">Home</a>
  </div>
</div>

 
<div class="crs-content" style="max-width:2000px;max-height:1080px;margin-top:46px;">

  <div class="crs-container crs-content crs-padding-64" style="max-width:1800px" id="contact">
    <h1 class="crs-wide crs-center">CPU Memory Data</h1>
    <div class="crs-row crs-padding-32 transp">
      <div>
      <table>
       <tr>
          <th>Update Number</th>
          <th>Total Memory</th>
          <th>Used Memory</th>
          <th>Free Memory</th>
          <th>Available Memory</th>
        </tr>
	<?php

	$query = mysqli_query($dbconnect, "SELECT * FROM memory")
   	or die (mysqli_error($dbconnect));

	while ($row = mysqli_fetch_array($query)) {
 	 echo
   	"<tr>
    	<td>{$row['id']}</td>
    	<td>{$row['total_mem']}</td>
    	<td>{$row['used_mem']}</td>
    	<td>{$row['free_mem']}</td>
    	<td>{$row['available_mem']}</td>
  	 </tr>\n";

	}

	?>	
      </table>
      </div>
    </div>
  </div>

  
</div>
</body>
</html>