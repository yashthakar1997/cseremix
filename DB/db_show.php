<div class="container">
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
			 
			// echo "{$row['name']}<br />" ;
			  
			$lat[] =$row['location_lat'];
			$lon[]= $row['location_lon'];
		 	$aname[] = $row['name'];
			
		}

	$sqlr="select * from offers";
	$f = mysql_query($sqlr);
	$ers = mysql_query( $sqlr, $con );
	$offr = array();
	$offrper = array();
	while ($row = mysql_fetch_assoc($ers)) {
		$offr[] = $row['offername'];
	}
?>
</div>