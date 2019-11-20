<?php

register_shutdown_function("fatal_handler");

function fatal_handler() {
}

include_once("./connection.php");


if (isset($_REQUEST['query']) && $_REQUEST['query'] !== "") {

    $query = $_REQUEST['query'];
    $return = array();

        
    $db = (new SQLiteConnection())->connect();
    
    $result = $db->query($query);


    $start = microtime(true);
    if ($result) {
        $return['flag'] = true;

        while($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            $return['data'][] = $row;
        }
    } else {
        $return['flag'] = false;
    }
    $return['time'] = number_format((microtime(true) - $start), 4);

    echo json_encode($return);
}

?>