<?php

      mysql_connect("localhost","wamomu","wamomu");

      mysql_select_db("wamomu");

      $q=mysql_query("SELECT * FROM people WHERE birthyear>'".$_REQUEST['year']."'");
	  
	  $output[];

      while($e=mysql_fetch_assoc($q)){

              $output[]=$e;
			  
			  }

           print(json_encode($output));
     
    mysql_close();
?>