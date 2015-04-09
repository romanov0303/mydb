<?PHP
print_r($_POST); 

$m_select=$_POST['m_select'];


mysql_connect("localhost","admin","123");
mysql_select_db("mydb");


 
 $sql = "SELECT idHarak,name_harak,type_harak FROM harak";

       $result_select = mysql_query($sql);



       while($object = mysql_fetch_object($result_select)){

       echo "<tr>";
	   //здесь условие нужно как в пред. файле
	  $Value=$_POST["Value_$object->idHarak"]; 
           $m_select1=$_POST["Value_$object->idHarak"];
		  $idHarak=$_POST["idHarak_$object->idHarak"];
		  //$m_select1=$_POST[m_select1];
		   //$idHarak1=$_POST["idHarak1_$object->idHarak"];
	   //echo $Value1;
	   //echo" . ";
	   //echo "$idHarak";
	     $sql1 ="SELECT Model_idModel,Harak_idHarak,type_harak FROM znach_harak INNER JOIN harak on znach_harak.Harak_idHarak=harak.idHarak WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select' ";
		//echo "SELECT Model_idModel,Harak_idHarak FROM znach_harak WHERE Harak_idHarak='$idHarak', Model_idModel='$m_select'";
		 $sql2="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint='$Value',Znachstr='$Value',Znachdouble='$Value',Spisok_znach_idSpisok_znach='$Value' WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		// echo "UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint='$Value',Znachstr='$Value',Znachdouble='$Value',Spisok_znach_idSpisok_znach='$Value' WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		 $sql3="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select','$Value','$Value','$Value','$Value')";
		 echo "INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select','$Value','$Value','$Value','$Value')<br/>";
          //$sql4="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachstr='$Value1'  WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		 // echo $sql4;
		 // $sql5="INSERT INTO `znach_harak`(`Harak_idHarak`, `Model_idModel`, `Znachstr` VALUES ('$idHarak','$m_select','$Value1')";
		  //echo $sql5;
		  $result_select1 = mysql_query($sql1) ;
            
             $num_rows=mysql_num_rows($result_select1);  
			 IF ($num_rows>0) {
			 $result2=mysql_query($sql2);
             //echo $result2;			 
			 }
		     IF ($num_rows==0) {
			 $result1=mysql_query($sql3); }
			// $result=mysql_query($sql1);
       echo "</tr>";
	   
	   }
	   


?>
