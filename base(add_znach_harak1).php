<?PHP
print_r($_POST); 

$m_select=$_POST['m_select'];


mysql_connect("localhost","admin","123");
mysql_select_db("mydb");


 
 $sql = "SELECT idHarak,name_harak FROM harak";

       $result_select = mysql_query($sql);



       while($object = mysql_fetch_object($result_select)){

       echo "<tr>";
	   
	  $Value=$_POST["Value_$object->idHarak"]; 
           
		  $idHarak=$_POST["idHarak_$object->idHarak"];
	   echo "$Value";
	   echo "$idHarak";
	     $sql1 ="SELECT Model_idModel,Harak_idHarak FROM znach_harak WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select' ";
		// echo "SELECT Model_idModel,Harak_idHarak FROM znach_harak WHERE Harak_idHarak='$idHarak', Model_idModel='$m_select'";
		 $sql2="UPDATE `znach_harak` SET `Harak_idHarak`=[$idHarak],`Model_idModel`=[$m_select],`Znachint`=[$Value]";
		 // echo "UPDATE `znach_harak` SET `Harak_idHarak`=[$idHarak],`Model_idModel`=[$m_select],`Znachint`=[$Value]";
		 $sql3="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint) VALUES('$idHarak','$m_select','$Value')";
		 // echo "INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint) VALUES('$idHarak','$m_select','$Value')";

           $result_select = mysql_query($sql1) ;

             $num_rows=mysql_num_rows($result_select); 
			 
			 IF ($num_rows>0) {
			 $result2=mysql_query($sql2); }
		     IF ($num_rows=0){
			  $result1=mysql_query($sql3); }
			// $result=mysql_query($sql1);
       echo "</tr>";
	   
	   }	   


?>
