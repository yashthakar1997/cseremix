 <?php
    $con=mysql_connect("localhost","root");	
	mysql_select_db("nbl",$con);
	$sql="select * from cafes";	
	$e=mysql_query($sql);
  	$retval = mysql_query( $sql, $con );
   		$lat = array();
    	$lon = array();
        $name =array();
             if(! $retval )
             {
         	 die('Could not get data: ' . mysql_error());
			 }
	 	while($row = mysql_fetch_assoc($retval))
       	{
			 
			echo "{$row['name']}<br />" ;
		}
?>