<?php

// $db = new Database;
// if($_SERVER["REQUEST_METHOD"] === "POST"){
//     $veilleSub = $_POST["subject"];
//     if(!empty($veilleSub)){
//         $suggest = new Student($db,"",$veilleSub);
//         $suggest->Suggest();
//     }
// }

class StudentDashboardController {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function showDashboard(){
        $showSuggested = new Student($this->db, $_SESSION["user_id"] , "","");
        $show = $showSuggested->ShowSuggest();
        require_once "./view/Sdashboard.view.php";
    }
    public function SuggestVeille(){
        $veilleSub = $_POST["subject"];
        if(!empty($veilleSub)){
            $suggest = new Student($this->db,$_SESSION["user_id"],$veilleSub,"");
            $suggest->Suggest();
            return $this->showDashboard();
        }
    }
    public function DeleteSuggested(){
        $VeilleId = $_POST["veille_id"];
        if(!empty($VeilleId)){
            $delete = new Student($this->db,"", "" , $VeilleId);
            $delete->DeleteSuggest();
            header("location: /dashboard");
            exit();
        }
    }
}
