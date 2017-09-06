<?php  
require_once __DIR__ . DIRECTORY_SEPARATOR . 'SeoReport.php';

if(isset($_POST["url"])){
	
	$url = $_POST["url"];
	
	$report = new SeoReport($url);
	
	$reqHTML = $report->getSeoReport();
}
?>
<DOCTYPE html>
<html>
<head>
<title>SEO Report Demo</title>
<style> 

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
	display: block;
	margin: auto;
	max-width: 600px;
	padding:5px;
	width: 100%;
}

.form_wrapper {
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
	padding: 20px 20px 10px 20px;
	margin: auto;
	max-width: 600px;
	margin-top: 20px;
	background: #EBEBEB;
}
.table-fill { 
	background: white;
	border-radius:3px;
	border-collapse: collapse;
	height: 320px;
	margin: auto;
	max-width: 640px; 
	width: 100%; 
	animation: float 5s infinite;
}  
 
th {
  color:#D5DDE5;;
  background:#1b1e24; 
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center, .text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style>
</head>
<body>
	<div class="form_wrapper">
		<h1 class="text-center">SEO Report Demo</h1>
		<hr/>
		<form action="index.php" method="post">
			URL : <input type="text" name="url" />
			<p>You must enter valid url</p>
			<br><br>
			<input type="submit" value="submit" />
		</form>
	</div> 
	<br>
	<br>
	<br>
<?php
if(isset($reqHTML)){
	echo $reqHTML;
}
?> 
</body>
</html>