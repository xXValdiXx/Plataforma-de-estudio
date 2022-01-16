<?php
session_start();
  include_once '../conexion.php';
$con=conectar();

$correo = $_SESSION['correo'];


//delete feedback
//if(isset($_SESSION['key'])){
if(@$_GET['fdid'] )//&& $_SESSION['key']=='sunny7785068889') 
{
$id=@$_GET['fdid'];
$result = mysqli_query($con,"DELETE FROM feedback WHERE id='$id' ") or die('Error');
header("location:../crearexa.php?q=3");
}
//}
//}

//remove quiz
//if(isset($_SESSION['key'])){
if(@$_GET['q']== 'rmquiz') //&& $_SESSION['key']=='sunny7785068889') 
{
$eid=@$_GET['eid'];
$result = mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' ") or die('Error1');
while($row = mysqli_fetch_array($result)) {
	$qid = $row['qid'];
$r1 = mysqli_query($con,"DELETE FROM options WHERE qid='$qid'") or die('Error2');
$r2 = mysqli_query($con,"DELETE FROM answer WHERE qid='$qid' ") or die('Error3');
}
$r3 = mysqli_query($con,"DELETE FROM questions WHERE eid='$eid' ") or die('Error4');
$r4 = mysqli_query($con,"DELETE FROM quiz WHERE eid='$eid' ") or die('Error5');
$r5 = mysqli_query($con,"DELETE FROM history WHERE eid='$eid' ") or die('Error6');
header("location:../crearexa.php?q=5");
}
//}

//add quiz
//if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addquiz')//&& $_SESSION['key']=='sunny7785068889') 
{
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$total = $_POST['total'];
$sahi = $_POST['right'];
$wrong = $_POST['wrong'];
$time = $_POST['time'];
$tag = $_POST['tag'];
$desc = $_POST['desc'];
//$id=uniqid();
$semestre=$_POST['lista1'];
$materia=$_POST['lista2'];
//$det=uniqid();
$qm=mysqli_query($con,"INSERT INTO quiz VALUES  (NULL,'$name','$sahi' , '$wrong','$total','$time' ,'$desc','$tag', NOW())");
$ultimo_id = mysqli_insert_id($con);  

$qn=mysqli_query($con,"INSERT INTO detallequiz VALUES  ('$ultimo_id','$semestre','$materia','$correo',NULL)");

header("location:../crearexa.php?q=4&step=2&eid=$ultimo_id&n=$total");
}
//}

//add question
//if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addqns')//&& $_SESSION['key']=='sunny7785068889')
{
$n=@$_GET['n'];
$eid=@$_GET['eid'];
$ch=@$_GET['ch'];
for($i=1;$i<=$n;$i++)
 {
 $qid=uniqid();
 $qns=$_POST['qns'.$i];
$q3=mysqli_query($con,"INSERT INTO questions VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
  $oaid=uniqid();
  $obid=uniqid();
$ocid=uniqid();
$odid=uniqid();
$a=$_POST[$i.'1'];
$b=$_POST[$i.'2'];
$c=$_POST[$i.'3'];
$d=$_POST[$i.'4'];
$qa=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
$qb=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
$qc=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
$qd=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
$e=$_POST['ans'.$i];
switch($e)
{
case 'a':
$ansid=$oaid;
break;
case 'b':
$ansid=$obid;
break;
case 'c':
$ansid=$ocid;
break;
case 'd':
$ansid=$odid;
break;
default:
$ansid=$oaid;
}
$qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$qid','$ansid')");

 }
header("location:../crearexa.php?q=0");
}
//}
?>



