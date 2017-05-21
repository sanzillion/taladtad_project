<?php 

require_once ("dbconnection.php");

if(isset($_POST['val'])){
	$val = $_POST['val'];
      $sql="SELECT * from student WHERE status = '$val'";
      $res=$db->prepare($sql);
      $res->execute();
      $str="<div class='demo_jui'><table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
      $str.="<thead><tr><th>Case Number</th><th>Case Title</th><th> Nature Of Cases</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location<br>(Barangay,Municipality,Province)</th> <th> Date Recieved <br>(Month/Date/Year)<th>Action <br> Taken/Status</th></th><th>Action</th></tr></thead><tbody>";
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
          $str.="<tr><td><center>".$row['id']."</center></td>";
          $str.="<td>".$row['fname']."</td>";
          $str.="<td>".$row['lname']."</td>";
          $str.="<td>".$row['contact']."</td>";
          $str.="<td>".$row['email']."</td>";
          $str.="<td>".$row['status']."</td>";
          $str.="<td><center><a class='fancybox fancybox.ajax' href='addstudent.php?ppid=".$row['id']."' onclick='return update()'><img src = 'images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a href='delete.php?pid=".$row['id']."' onclick='return bura()' ><img src = '' height='' width='' alt = '' title = ''/></a></center></td></tr>";
        }
        echo $str;
        echo "</tbody></table></div>";
}

 ?>