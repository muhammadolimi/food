<?php
if(isset($_GET["page"]) && !empty(trim($_GET["page"]))) {
    $page = $_GET["page"];
    require_once('db_users.php');
    if ($page == "11") {
        require_once ('search.php');
    }
    // require_once('db_users.php');
}

?>