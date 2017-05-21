<?php require_once ("dbconnection.php");
	$ppid="";
	$pfname="";
	$plname="";
	$pcontact="";
	$pemail="";
	$pstatus="";
		if(isset($_GET['ppid'])){
			$ppid = $_GET['ppid'];
			$sqlLoader="Select from student where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Sample</title>
<style>
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	background-color:#e40b24;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:crosshair;
	color:#e40b24;
	font-family:Vermin Vibes;
	font-size:18px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
</head>
<?php
	$sqladd="Select * from student where id=?";
	$resadd=$db->prepare($sqladd);
	$resadd->execute(array($ppid));
		while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
		$pnum=$rowadd['id'];
		$pfname=$rowadd['fname'];
		$plname=$rowadd['lname'];
		$pcontact=$rowadd['contact'];
		$pemail=$rowadd['email'];
		$pstatus=$rowadd['status'];
	}
?>
    <form method="post" name="frmStudent" action="save.php">

    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
        <table>
            <tr><td>Case Title</td><td>:</td><td><input type="text" name="fname" required="required" value="<?php echo $pfname; ?>"/></td></tr>
            <tr><td>Nature of Cases</td><td>:</td><td><input type="text" name="lname" required="required" value="<?php echo $plname; ?>"/></td></tr>
            <tr><td>Location</td><td>:</td><td><input type="tel" name="contact" required="required" value="<?php echo $pcontact; ?>"/></td></tr>
            <tr><td>Date Recieved</td><td>:</td><td><input type="date" name="email" required="required" value="<?php
            	echo $pemail; ?>" style="width:100%;"/></td></tr>
							<tr><td>Taken/Status</td><td>:</td><td><input type="tel" name="status" required="required" value="<?php echo $pstatus; ?>"/></td></tr>
            <tr><td></td><td></td><td>
            <br> <center><input type="submit" class="myButton" value="Save"/></center></td></tr>
        </table>
    </form>
<body>
</body>
</html>
