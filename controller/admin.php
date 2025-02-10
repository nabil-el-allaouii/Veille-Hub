<?php 


class AdminController {
    private $db;

    public function showDashboard(){
        require_once "./view/Adashboard.view.php";
    }
}