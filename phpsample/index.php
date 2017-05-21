<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
window.onload = init;

function init() {
  window.setInterval(time, 66);
}

function time() {
  var tim = new Date();
  var clockDiv = document.getElementById("clock");
  clockDiv.innerHTML = tim.toLocaleTimeString()+"."+tim.getMilliseconds();
}
@import url(http://fonts.googleapis.com/css?family=Faster+One);
html, body {
  background: #222222;
}
.wrap {
  position: fixed;
  top: 50%;
  left: 50%;
  height: 80px;
  margin-top: -40px;
  width: 1000px;
  margin-left: -500px;
}
#clock {
  text-align: center;
  font-size: 80px;
  color: #424242;
  font-family: 'Faster One', cursive;
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="denr2.jpg" alt="Image">
      </div>

      <div class="item">
        <img src="denr.jpg" alt="Image">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<?php require_once ("dbconnection.php");
  $pnum="";
  $pfname="";
  $plname="";
  $pcontact="";
  $pemail="";
  $pstatus="";
  $pactionl="";

    if(isset($_GET['ppid'])){
      $ppid = $_GET['ppid'];
      $sqlLoader="Select from student where id=?";
      $resLoader=$db->prepare($sqlLoader);
      $resLoader->execute(array($ppid));
      while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){
        $pnum=$rowLoader['id'];
        $pfname=$rowLoader['fname'];
        $plname=$rowLoader['lname'];
        $pcontact=$rowLoader['contact'];
        $pemail=$rowLoader['email'];
        $pstatus=$rowLoader['status'];
        $pacttion=$rowLoader['action'];
      }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Sample</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="fancybox/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".fancybox").fancybox();
});
</script>
    <style type="text/css" title="currentStyle">
      @import "css/demo_page.css";
      @import "css/demo_table_jui.css";
      @import "css/jquery-ui-1.8.4.custom.css";
    </style>
<script src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
      jQuery(document).ready(function() {
        oTable = jQuery('#tbl').dataTable({
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
                } );
        });
    </script>
<style>
#myButton {
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
  background-color:#ededed;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:4px solid #19af2a;
  display:inline-block;
  cursor:wait;
  color:#777777;
  font-family:Vermin Vibes;
  font-size:20px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:blink;
  text-shadow:5px 1px 0px #ffffff;
}
#myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
  background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
  background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
  background-color:#dfdfdf;
}
#myButton:active {
  position:relative;
  top:1px;
}
</style>
</head>
<br/><br/>
 <!-- <div class="modal fade" id="myModal" role="dialog" style="display: none;">
    <div class="modal-dialog">


      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Add Inventory</h4>
        </div>
        <div class="modal-body">
         <form role="form">
            <div class="form-group">
              <label for="ctitle">&nbsp;Case Title</label>
              <input name="title" class="form-control" id="ctitle" type="text">
            </div>
           <div class="form-group">
              <label for="ncases">&nbsp;Nature of Cases</label>
              <textarea class="form-control" id="ncases" name="nature" rows="2"></textarea>
            </div>
            <div class="form-group">
              <label for="location">&nbsp;Location (Barangay, Municipality, Province)</label>
              <textarea class="form-control" id="location" name="location" rows="2"></textarea>
            </div>
            <div class="form-group">
              <label for="date">&nbsp;Date Recieved</label>
               <input class="form-control" name="dr" id="date" placeholder="Select Day" required="" type="Day">
            </div>
            <div class="form-group">
              <label for="status">&nbsp;Status</label>
               <input class="form-control" name="status" id="status" placeholder="Select Day" required="" type="Day">
            </div>
            <div class="form-group">
              <label for="action">&nbsp;Action Taken/Status</label>
              <input name="action" class="form-control" id="action" type="text">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-success" id="myBtn">Save</button>
          <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div> -->

  <select id="dsearch" name="d-search">
  <option></option>
  <option value="Active on Files`">Active on Files`</option>
  <option value="Terminated Cases">Terminated Cases</option>
</select>
<input type="submit" value="Submit">
</form>
<center>
<a href="addstudent.php" id="myButton" class="fancybox fancybox.ajax" style="width: 200">ADD</a>
<br/><br/>
</center>
<div id="table">
<?php
          $sql="Select * from student";
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
?>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $("#dsearch").change(function(){
      console.log(val);
      var val = $(this).val();
      if(val != ''){
        $.ajax({
          url: 'dsearch.php',
          method: 'POST',
          data: {val:val},
          success:function(data){
            $('#table').html(data);
          }
        })
      }
      else{
        location.reload();
      }
    })
  });
</script>