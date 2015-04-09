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
		 $sql2="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint='$Value',Znachstr=NULL,Znachdouble=NULL,Spisok_znach_idSpisok_znach=NULL WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		// echo "UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint='$Value',Znachstr='$Value',Znachdouble='$Value',Spisok_znach_idSpisok_znach='$Value' WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		 $sql3="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select','$Value',NULL,NULL,NULL)";
		 //echo "INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select','$Value')<br/>";
          //$sql4="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachstr='$Value1'  WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		 // echo $sql4;
		 $sql5="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select',NULL,'$Value',NULL,NULL)";
		 $sql6="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select',NULL,NULL,'$Value',NULL)";
		  $sql7="INSERT INTO znach_harak (Harak_idHarak,Model_idModel,Znachint,Znachstr,Znachdouble,Spisok_znach_idSpisok_znach) VALUES('$idHarak','$m_select',NULL,NULL,NULL,'$Value')";
		   $sql8="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint=NULL,Znachstr='$Value',Znachdouble=NULL,Spisok_znach_idSpisok_znach=NULL WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		    $sql9="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint=NULL,Znachstr=NULL,Znachdouble='$Value',Spisok_znach_idSpisok_znach=NULL WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		  $sql10="UPDATE znach_harak SET Harak_idHarak='$idHarak',Model_idModel='$m_select',Znachint=NULL,Znachstr=NULL,Znachdouble=NULL,Spisok_znach_idSpisok_znach='$Value' WHERE Harak_idHarak='$idHarak' and Model_idModel='$m_select'";
		 echo $sql9;
		 //echo $sql10;
		  $result_select1 = mysql_query($sql1) ;
            
             $num_rows=mysql_num_rows($result_select1);  
			 IF ($num_rows>0) {
			     
			 IF($object->type_harak == "INT"){
			 $result2=mysql_query($sql2); }
			     IF($object->type_harak == "STR"){
					 $result6=mysql_query($sql8);
				 }
				 IF($object->type_harak == "DBL"){
					 $result7=mysql_query($sql9);
				 }
				 IF($object->type_harak == "LST"){
					 $result8 = mysql_query($sql10);
             //echo $result2;			 
			 }}
		     IF ($num_rows==0) {
				 IF($object->type_harak == "INT"){
			 $result1=mysql_query($sql3); }
			     IF($object->type_harak == "STR"){
					 $result3=mysql_query($sql5);
				 }
				 IF($object->type_harak == "DBL"){
					 $result4=mysql_query($sql6);
				 }
				 IF($object->type_harak == "LST"){
					 $result5 = mysql_query($sql7);
			 }
			 }}
			// $result=mysql_query($sql1);
       echo "</tr>";
	   
	   
	   


?>
