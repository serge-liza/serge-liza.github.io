<?php 
session_start();
include "header.php";

unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
?>
<B>ON-LINE �����</H1>
                                                   <B>
                                                      <STRONG>
<a href="info.php?location=index.php"></a><br><br> 													 
<a href="info.php?location=test1.php">������������� � �����</a><br><br> 
<a href="info.php?location=test2.php">���� ����������� ���������</a><br><br> 
<a href="info.php?location=test3.php">���� ����� �������</a><br><br> 
<a href="info.php?location=test4.php">����������������� ������</a><br><br> 
<a href="info.php?location=test5.php">����������������� ����������� � ����</a><br><br> 
                                                       </STRONG> 
                                                   <BR>

<?php
include "footer.php";
?>