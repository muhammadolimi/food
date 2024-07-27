<?php
if(isset($_GET["page"]) && !empty(trim($_GET["page"]))) {
    $page = $_GET["page"];
    require_once('db_users.php');
    if ($page == "1" || $page == "addemployer") {
    require_once ('pages/employers/add.php');
    }
    if ($page == "2" || $page == "listemployer") {
        require_once ('employers/list.php');
    }
    if ($page == "3" || $page == "addbooks") {
        require_once ('books/add.php');
    }
    if ($page == "4" || $page == "listbooks") {
        require_once ('books/list.php');
    }
    if ($page == "6") {
        require_once ('books/update.php');
    }
    if ($page == "5") {
        require_once ('books/edit.php');
    }
    if ($page == "7") {
        require_once ('employers/edit.php');
    }
    if ($page == "8") {
        require_once ('employers/update.php');
    }
    if ($page == "9") {
        require_once ('books/requests.php');
    }
    if ($page == "10") {
        require_once ('books/add_requests.php');
    }
    if ($page == "11") {
        require_once ('books/add_requests.php');
    }
    // require_once('db_users.php');
}

?>