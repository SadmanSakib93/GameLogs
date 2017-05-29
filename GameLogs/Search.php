<?php

include ('Connect.php');
if(isset($_POST['search_term'])==true && empty($_POST['search_term'])==false)
{
    $search_term= mysql_real_escape_string($_POST['search_term']);
    $query=mysql_query("SELECT NAME FROM gametable  WHERE NAME LIKE '$search_term%'");
    while($rows = mysql_fetch_assoc($query)){
        echo '<li>'. $rows['NAME'] . '</li>';
    }
}
