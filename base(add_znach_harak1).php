<?PHP
print_r($_POST); 
$Value=$_POST['Value_$object->idHarak']; 
$idHarak=$_POST['idHarak_$object->idHarak'];
$m_select=$_POST['m_select'];


mysql_connect("localhost","admin","123");
mysql_select_db("mydb");

$sql = "INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint) VALUES('$idHarak','$m_select','$Value')";

$result_select = mysql_query($sql);



       while($result_select){
		   echo "<td>good</td>";
}

?>
