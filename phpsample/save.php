<?php
error_reporting(0);
	include ("dbconnection.php");
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$status=$_POST['status'];
	$id=$_POST['pid'];
	if($id==null){
			$sql="INSERT INTO student(fname,lname,contact,email,status)values(:fname,:lname,:contact,:email,:status)";
			$qry=$db->prepare($sql);
			$qry->execute(array(':fname'=>$fname,':lname'=>$lname,':contact'=>$contact,':email'=>$email,':status'=>$status));
	}else{
			$sql="UPDATE student SET fname=?, lname=?, contact=?, email=?, status=? where id=?";
			$qry=$db->prepare($sql);
			$qry->execute(array($fname,$lname,$contact,$email,$status,$id));
	}
	echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('index.php','_self')</script>";
?>
