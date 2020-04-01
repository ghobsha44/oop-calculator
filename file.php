
<?php
if(isset($_POST['add'])){
  $num1=$_POST['num1'];
  $sum=$_POST['add'];
  $sub=$_POST['subtract']=null;
  $multi=$_POST['multiply']=null;
  $divition=$_POST['divide']=null;
  $num2=$_POST['num2'];
}

if(isset($_POST['subtract'])){
  $num1=$_POST['num1'];
  $sum=$_POST['add']=null;
  $sub=$_POST['subtract'];
  $multi=$_POST['multiply']=null;
  $divition=$_POST['divide']=null;
  $num2=$_POST['num2'];
}

if(isset($_POST['multiply'])){
  $num1=$_POST['num1'];
  $sum=$_POST['add']=null;
  $sub=$_POST['subtract']=null;
  $multi=$_POST['multiply'];
  $divition=$_POST['divide']=null;
  $num2=$_POST['num2'];
}

if(isset($_POST['divide'])){
  $num1=$_POST['num1'];
  $sum=$_POST['add']=null;
  $sub=$_POST['subtract']=null;
  $multi=$_POST['multiply']=null;
  $divition=$_POST['divide'];
  $num2=$_POST['num2'];
}



include 'save.php';

$calculator= new calculator($num1,$sum,$sub,$multi,$divition,$num2);
$calculator-> domath();
 ?>
