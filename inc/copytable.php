<?php

include_once("inc/mysql_connect.php") ?>

if(copy_table('all_tents', 'all_tents-new')) {
    echo "success\n";
}
else {
    echo "failure\n";
}

function copy_table($from, $to) {

    if(table_exists($to)) {
        $success = false;
    }
    else {
        mysql_query("CREATE TABLE $to LIKE $from");
        mysql_query("INSERT INTO $to SELECT * FROM $from");
        $success = true;
    }

    return $success;

}

function table_exists($tablename, $database = false) {

    if(!$database) {
        $res = mysql_query("SELECT DATABASE()");
        $database = mysql_result($res, 0);
    }

    $res = mysql_query("
        SELECT COUNT(*) AS count
        FROM information_schema.tables
        WHERE table_schema = '$database'
        AND table_name = '$tablename'
    ");

    return mysql_result($res, 0) == 1;
}

?>