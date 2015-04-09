<html>
	<head>
	<title>Форма(model)</title>
	</head>
	<body>

       
        <form method="post" action="base(add_znach_harak1).php">
		<?php
        $idModel=$_POST['m_select'];
        echo "$idModel";

       mysql_connect("localhost", "admin", "123");

       mysql_select_db("mydb");
    
     $sql = "SELECT type_harak, idHarak, name_harak, 
	 (select Znachint from znach_harak where znach_harak.Harak_idHarak=harak.idHarak and Model_idModel=$idModel) as Znachint, 
	 (select Znachstr from znach_harak where znach_harak.Harak_idHarak=harak.idHarak and Model_idModel=$idModel) as Znachstr,
     (select Znachdouble from znach_harak where znach_harak.Harak_idHarak=harak.idHarak and Model_idModel=$idModel) as Znachdouble	 FROM harak";
     
       $result_select = mysql_query($sql);
	   
	   echo $sql."<br>";
	   


echo "<table>";
 
       while($object = mysql_fetch_object($result_select)){

       echo "<tr>";
           echo " <td>".$object->name_harak." </td>";
		   
           if ($object->type_harak == "INT")
		   echo "<td>".$object->idHarak." 
		   <input type='text' value='$object->Znachint' name='Value_$object->idHarak' />
		   <input type = 'hidden' value='$object->idHarak'  name='idHarak_$object->idHarak'></td>";
		  
            if ($object->type_harak == "STR")				
			   echo "<td>".$object->idHarak." 
		    <input type='text' value='$object->Znachstr' name='Value_$object->idHarak' />
		    <input type = 'hidden' value='$object->idHarak'  name='idHarak_$object->idHarak'></td>";
			
			 if ($object->type_harak == "DBL")				
			   echo "<td>".$object->idHarak." 
		    <input type='text' value='$object->Znachdouble' name='Value_$object->idHarak' />
	   <input type = 'hidden' value='$object->idHarak'  name='idHarak_$object->idHarak'></td>";
			
		 
		  
	   
        echo "</tr>";
	   if ($object->type_harak == "LST"){
				
		   $sql1="SELECT idSpisok_znach,Harak_idHarak,Znach FROM spisok_znach WHERE Harak_idHarak=$object->idHarak";
		     $result1=mysql_query($sql1);
	   echo "<select name= 'Value_$object->idHarak'>";
	           
			   while($row = mysql_fetch_object($result1)){
				  echo "<option value='$row->idSpisok_znach'> $row->Znach</option>"; 
			   }
			  
	   echo "</select>";
      echo "<input type = 'hidden' value='$object->idHarak'  name='idHarak_$object->idHarak' />";	   }	 } 
	echo "</table>";   
       echo "<input type = 'hidden' value='$idModel'  name='m_select'><input type='submit'>";

       ?>

	
 

	</body>
	</html>
