<?php

//including the Mysql connect parameters.
include("../sql-connections/db-creds.inc");
include "../../../config/config.inc.php";
@error_reporting(0);
@$con = mysql_connect($_DVWA['db_server'],$_DVWA['db_user'],$_DVWA['db_password']);
// Check connection
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysql_error();
}


    @mysql_select_db($dbname1,$con) or die ( "Unable to connect to the database: $dbname1".mysql_error());






$sql_connect_1 = "SQL Connect included";

############################################
# For Challenge series--- Randomizing the Table names.

?>




 
