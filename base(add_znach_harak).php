<html>
	<head>
	<title>Форма(model)</title>
	</head>
	<body>

       
        <form method="post" action="base(add_znach_harak1).php">
		<?php
        $idModel=$_POST['m_select'];
        //echo "$idModel";

       mysql_connect("localhost", "admin", "123");

       mysql_select_db("mydb");
    
     $sql = "SELECT idHarak,name_harak FROM harak";

       $result_select = mysql_query($sql);



       while($object = mysql_fetch_object($result_select)){

       echo "<tr>";
           echo " <td>".$object->name_harak." </td>";
           echo "<td>".$object->idHarak." 
		   <input type='text' name='Value_$object->idHarak' />
		   <input type = 'hidden' value='$object->idHarak'  name='idHarak_$object->idHarak'></td>";
      
        echo "</tr>";
	   }
	   
       echo "<input type = 'hidden' value='$idModel'  name='m_select'><input type='submit'>";

       ?>

	
 

	</body>
	</html>
