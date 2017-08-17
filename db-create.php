<?php

   $host        = "host = ec2-184-72-230-93.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcot5ea8vgmr1t";
   $credentials = "user = nwktolobhorubg password=85b3da606efa12296f61a6139f968445b14631032d8a3990e2cccf76c2b11b60";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      country        CHAR(50));
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>