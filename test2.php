<?php 
session_start();
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
$s="SELECT * FROM test2_vopr";
$query=$cdb->query($s);

print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
while($res=$cdb->fetch_array($query))
  {
print'<h3>'.$res['ques'].'</h3>';  
print'<input type="radio" name="d'.$r.'" value="'.$res['v1'].'" id="1"> <label for="1">'.$res['var1'].'</label>'; 
 print'<br>';

print'<input type="radio" name="d'.$r.'" value="'.$res['v2'].'" id="2"> <label for="2">'.$res['var2'].'</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="'.$res['v3'].'" id="3"> <label for="3">'.$res['var3'].'</label>';
print'<br>';


print"_______________________________________________________________";
$r++;
  }
print'<input type="hidden" name=end value="end">';
print'<input type="submit" value="��������">';

print'</form>';


}

function update_opros(){

$r=1;
$ball=0;
while ($r<11)
{

if (isset($_POST["d$r"])){
$ball=$ball+$_POST["d$r"];
}
$r++;
}
print "�� ������� $ball ������  <br>";

print "
��� ������� ������ ������� ������ �� ����, ������� � ��� �������...<br>

�� 0 �� 10 �����: � ����� ����� ������� ������������ � ����� ���������. ������ �� ��� ������� ���, ��� ��� �������, � ������� ��� ����������� �����������. � ��� ��� ����������� �������� � ��� �� ������ (��������, ��������������), ������ ��� ���� ��� �������� �����.<br>
 
�� 11 �� 29: ������ �������, ��� � ����� ����� ���������� �� ������� ���� � ������ ������ ����������. �� ���� ��� �����, � ������� ��� ����� � ����� ���� �� ��������. �� ��� ����� �� ����������. ���������� �������, � ������� �� �� ��������, � �� ��� �� ��������� ��������� ��. � ��� ����� � ����������, ������ ��� ������ ��������� ������������� ����� ����� ��������, ������� �� ��� �������. � ������ �������� ����...   <br>


";
 
print "<br>";



print"<a href=tests.php>�� �������</a><br>";
 
 
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
$s="INSERT INTO `test2_otv` (`date`,`name`,`age`,`sex`,`ball`) VALUES ('$data_test','$name','$age','$sex','$ball');";
$sort=@mysql_query($s) or die ("�� ������� ������");
}
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>