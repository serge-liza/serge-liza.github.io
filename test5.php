<?php 
session_start();
error_reporting(0);
include "header.php";


if (isset($_POST['name'])){
$_SESSION['name']=$_POST['name'];
}

if (isset($_POST['sex'])){
$_SESSION['sex']=$_POST['sex'];
}

if (isset($_POST['age'])){
$_SESSION['age']=$_POST['age'];
}




if (!isset($_POST['end'])){
$end='begin';
}
else
{
$end=$_POST['end'];
}

if ($end=='end') {
update_opros();
}
else{
content_print(); 
}

function content_print(){

global $cdb;
$r=1;
$s="SELECT * FROM test5_vopr";
$query=$cdb->query($s);

print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
while($res=$cdb->fetch_array($query))
  {
  
if ($res['key']==1) 
{
$vl1=4;
$vl2=3;
$vl3=2;
$vl4=1;
}
else
{
$vl1=1;
$vl2=2;
$vl3=3;
$vl4=4;
}
  
print'<h5>'.$res['ques'].'</h5>';  

if (isset ($res['var1'])){
print'<input type="radio" name="d'.$r.'" value="'.$vl1.'" id="1"> <label for="1">'.$res['var1'].'</label>'; 
print'<br>';
}

if (isset ($res['var2'])){
print'<input type="radio" name="d'.$r.'" value="'.$vl2.'" id="2"> <label for="2">'.$res['var2'].'</label>';
print'<br>';
}

if (isset ($res['var3'])){
print'<input type="radio" name="d'.$r.'" value="'.$vl3.'" id="3"> <label for="3">'.$res['var3'].'</label>';
print'<br>';
}

if (isset ($res['var4'])){
print'<input type="radio" name="d'.$r.'" value="'.$vl4.'" id="4"> <label for="3">'.$res['var4'].'</label>';
print'<br>';
}


print"_______________________________________________________________";
$r++;
  }
print'<input type="hidden" name=end value="end">';
print'<input type="submit" value="ќтветить">';

print'</form>';


}

function update_opros(){

$r=1;
$un=0;

$un=($_POST['d11']+$_POST['d13']+$_POST['d15']+$_POST['d18']+$_POST['d22'])/5;
$un=round($un,2);


$uk=0;

$uk=($_POST['d5']+$_POST['d7']+$_POST['d9']+$_POST['d10']+$_POST['d19'])/5;
$uk=round($uk,2);


$p=0;

$chast=16;

$p=($_POST['d5']+$_POST['d6']+$_POST['d7']+$_POST['d8']+$_POST['d9']+$_POST['d10']+$_POST['d12']+$_POST['d14']+$_POST['d16']+$_POST['d17']+$_POST['d19']+$_POST['d20']+$_POST['d21']+$_POST['d23']+$_POST['d24']+$_POST['d25']);

if (isset($_POST['d2'])){
$p=$p+$_POST['d2'];
$chast++;
}

if (isset($_POST['d4'])){
$p=$p+$_POST['d4'];
$chast++;
}

$p=$p/$chast;
$p=round($p,2);







print "Ќепосредственный показатель удовлетворенности отношени€ми:<br> $un -";

if ($un> 2.4)
print"высокий";
if ($un>1.6 and $un<=2.4)
print"средний";
if ($un<=1.6)
print"низкий";

print "<br>";

print " освенный показатель удовлетворенности отношени€ми:<br>  $uk -";

if ($uk>2.6)
print"высокий";
if ($uk>2.3 and $uk<=2.6)
print"средний";
if ($uk<=2.3)
print"низкий";

print "<br>";

print "ѕоказатель Ђпозитивностиї, общей благопри€тности отношений в паре:<br>  $p -";

if ($p>2.6)
print"высокий";
if ($p>2.3 and $p<=2.6)
print"средний";
if ($p<=2.3)
print"низкий";

print "<br>";
 
print "<br>";



print"<a href=tests.php>Ќа главную</a><br>";
 
 
global $cdb;
 
 
 $day = date("d");
$Month = date("m");
$Year = date( "Y" );
$hour = date("H");
$Min = date("i");
$data_test="$Year$Month$day";

$name='noname';
$sex=0;
$age=0;

if (isset($_SESSION['name']))
$name=$_SESSION['name'];


if (isset($_SESSION['sex']))
$sex=$_SESSION['sex'];


if (isset($_SESSION['age']))
$age=$_SESSION['age'];


if ($name!='noname'){
$s="INSERT INTO `test5_otv` (`date`,`name`,`age`,`sex`,`un`,`uk`,`p`) VALUES ('$data_test','$name','$age','$sex','$un','$uk','$p');";
$sort=@mysql_query($s) or die ("Ќе внесены данные");
}
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>