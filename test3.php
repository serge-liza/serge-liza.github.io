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

print "
<TABLE BORDER=0 WIDTH=\"100%\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
					<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>
					
					
					<TR>
							<TD bgcolor=\"#FFFFFF\"><br><h5>��������� ������ �������� ��� ��� ������ �� ��������� �����������? <br>(1 - ���������� �� �����, 10 - ������������� �����)</h5><br></TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 1. ������� ���� ������� � �������� ���������� ���������������� �����<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 2. ������������ ���������� � �������� ��� ������, ������ �� ��� �� ���� ������� ����������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 3. ����� ����������� ������ ��� ��-������, �� ������ ���������� ��������� �����-���� �����������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 4. ����� ���������� ����� ������ � ��������������� ������� � ���������� �������������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 5. ����������� ���� ������ ��������, �������� ������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 6. �������� ��� ����������, ������� �������������� ����� �� ���������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 7. ����� ����� ����� �����, ����� �������� ����� � ������� ���� ������������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 8. ������� � ��������� �����, ��� ����� �����, ������� ��� �������������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 9. ������� �������� ���������������� � ����� �������������, ����� �������� ����������� ������ ����� ������� ���������, �� ����������� ��������� � ��������� ������ ���� ������������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 10. ���� ������ ������������� � �����������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 11. ����� ������, �� ��������� � ������� ��� ������� ���������������� �������������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 12. �������� � �����������, ������� ��������� ��� ������������ �� ���������� ������ �������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 13. ����������� ���� ������ � ����������� �� ��, ����� ������� ��� �����<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 14. ������������� � ������� � ���������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 15. ������� �������, ������� �������� ��� �� �������� ����� ������ �����<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 16. ������� ����� ������������ �����������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 17. ��������� ��� ����� ��������� ���������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 18. ������ ������� ����������� ���������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 19. ����� ������, ������� ������������� �������� ������� � ��������� � ������ ��������� �������, ������� ���������� � �.�.<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[3]\"value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 20. ���������� �� ����� ����� ����������, ��� ���������� � ����� � ����������<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"smg[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 21. ����� ����������� ������������ ���� ������ � ������ ��� �������� ������ ����<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"><br><h5>��������� �� �������� � ������ �� ��������� �����������?<br> (1 � ���������� �� ��������, 10 � ��������� ��������)</h5><br></TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>22. ������������ �������������� ���� ���� ������� - �������� � ������ ������� ��������, ���������� �� ����, � ����� ������� ��� ��������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>23. � ������ ��������� ������� ���������� �������� ���� ����� � ���� �������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>24. � ������ �������� � ������ ����, ������� ����� ��� ����������� ������ � ��������� ���� ����������� ����<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>25. � ��������� �� ����������� ��������� ������ � ��� ������, ���� ��� ��������� � ����� ���� ���������������� �����������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>26. � ����� �� ������� ������ ��������� � �����������, ������� ������ �� ����������� ��������� �� ������� ������ ����� � ������������� �� ������������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>27. � ���� ���������������� ������������ � ����� ����� �������� � ����� ������� � ���������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>28. ��� ���� ������ �������� �� �������� ����� ����������, ��� �������� ��������� ��� ����� ������ �� ����� ���������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"smg[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>29. � ������ ����� ������, �� ������� ��� �� ��������� ������ ������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>30. ������������ � ������� - ��� �������� ������ ������� ���� �������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>31. ������� ����� ����� ������ � ��� ������, ���� ��� ��������� ����� �����, ������� ��� ��������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>32. ������������������� ������������ ���������� ����������� ����� ���� �������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>33. � �� ������ ���� �� �����������, ��� ���� ���������� �������, �� ��������� � ���� ����������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>34. � ���� �������, ��� ������ ������ � ������� ������ �����, ����� ����� ������������� �������� ������ � �������� �����������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>35. � �� ����, ����� ���� �������� ����� ����� ������-�����������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>36. � ��������� �� �������� � �����������, ������� ������������ ���������� ��������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>37. � ����� �� ��������� ���� ������� ���������� ������ � �������� ����<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>38. � �������� ���� ������������� ������ �����, ����� � ��������� �������� � ������� ������� ������� ��� � �������� ������������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>39. ������� � ���������� ������������ ����� ����� ������, ��� ���������� ������ � �������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>40. � ������ ����� �������� � ��������� ���� ����������� ������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>41. � ����������� ������, ������� �� ������� � ��������������<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"smg[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
			<input type=\"Hidden\" name=\"end\" value=\"end\">
			<input type=\"submit\" value=\"������\">
							</TD>
						</TR>
					</TABLE>
					<br><br>
			
		</form
";



}

function update_opros(){

$pk=$_POST['pk'];
$m=$_POST['m'];
$a=$_POST['a'];
$sr=$_POST['sr'];
$smg=$_POST['smg'];
$s=$_POST['s'];
$v=$_POST['v'];
$i=$_POST['i'];
$p=$_POST['p'];

$pk=array_sum($pk)/count($pk);
$m=array_sum($m)/count($m);
$a=array_sum($a)/count($a);
$sr=array_sum($sr)/count($sr);
$smg=array_sum($smg)/count($smg);
$s=array_sum($s)/count($s);
$v=array_sum($v)/count($v);
$i=array_sum($i)/count($i);
$p=array_sum($p)/count($p);



$pk=round($pk,2);
$m=round($m,2);
$a=round($a,2);
$sr=round($sr,2);
$smg=round($smg,2);
$s=round($s,2);
$v=round($v,2);
$i=round($i,2);
$p=round($p,2);



print"<br>���������������� �������������� $pk";
if($pk>6) 
print"- ���� ���������� ����������";

print"<br>���������� $m";
if($m>6) 
print"- ���� ���������� ����������";

print"<br>��������� (�������������) $a";
if($a>6) 
print"- ���� ���������� ����������";

print"<br>������������ ������ $sr";
if($sr>6) 
print"- ���� ���������� ����������";

print"<br>������������ ����� ���������� $smg";
if($smg>6) 
print"- ���� ���������� ����������";

print"<br>�������� $s";
if($s>6) 
print"- ���� ���������� ����������";

print"<br>����� $v";
if($v>6) 
print"- ���� ���������� ����������";

print"<br>���������� ������ ����� $i";
if($i>6) 
print"- ���� ���������� ����������";

print"<br>������������������� $p";
if($p>6) 
print"- ���� ���������� ����������";



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
$s="INSERT INTO `test3_otv` (`date`,`name`,`age`,`sex`,`pk`,`m`,`a`,`sr`,`smg`,`s`,`v`,`i`,`p`) VALUES ('$data_test','$name','$age','$sex','$pk','$m','$a','$sr','$smg','$s','$v','$i','$p');";
$sort=@mysql_query($s) or die ("�� ������� ������");
} 
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>