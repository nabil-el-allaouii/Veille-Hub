<?php

$db = new Database;
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $veilleSub = $_POST["subject"];
    if(!empty($veilleSub)){
        $suggest = new Student($db,"",$veilleSub);
        $suggest->Suggest();
    }
}

require "./view/Sdashboard.view.php";