<option value="">[select from list below]</option>
<?php
include("db.php");
$id = $_POST["id"];
  $c0 = "select distinct(name) from states where country_id = ( select id from countries where name = '".$id."')";
  $Crun0=mysqli_query($dbcon,$c0);
 while($row = $Crun0->fetch_object())
 { ?>
 <option value="<?php echo $row->name; ?>"><?php echo $row->name;  ?></option>
 <?php }
?>