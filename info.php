<?php 
session_start();
include "header.php";

print" <BR> <STRONG>  ";


print"<form action=".$_GET['location']." method=post enctype=multipart/form-data>";

print'<h3>��������� �����</h3>';  

print"<b>������� ��� ��������</b><br>";
print"<input type=text name=name size=20><br><br><br>";

print"<b>�������</b> &nbsp;&nbsp;&nbsp;&nbsp;";
print"<select name=age style='width:140;'>";

$i=10;
while ($i<100){

print"<option value=$i>$i</option>";
$i++;
}
print"

</select><br><br><br>
";

print"<b>���</b><br>";
print"
������� <input type=radio name=sex value=0 CHECKED>
<br>������� <input type=radio name=sex value=1>
";


print'<br><br><input type="submit" value="��">';
print'</form>';
 print"  </STRONG>  <BR>";
                                                  

include "footer.php";
?>