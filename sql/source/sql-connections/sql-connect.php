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


    @mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");






$sql_connect = "SQL Connect included";
############################################
# For Less-24
$form_title_in="Please Login to Continue";
$form_title_ns="New User";
$feedback_title_ns="New User";
$form_title_ns= "Less-24";

############################################
# For Challenge series--- Randomizing the Table names.

?>




 
