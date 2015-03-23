<?PHP
print_r($_POST); 
$Value=$_POST['Value']; 
$idHarak=$_POST['idHarak'];
$m_select=$_POST['m_select'];


mysql_connect("localhost","admin","123");
mysql_select_db("mydb");
mysql_query("SET NAMES 'UTF-8 Unicode'");

$result=mysql_query("INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint) VALUES('$idHarak','$m_select','$Value') ");

if (!$result) {
    die('' . mysql_error());
}
?>
