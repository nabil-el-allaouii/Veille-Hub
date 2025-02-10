<?php

class Student extends Users
{
    private $student_id;
    private $VeilleSubject;
    private const SUGGESTED_VEILLE = true;
    private $veille_id;

    public function __construct($db, $studentID, $subject, $veilleID, $username = "", $email = "", $password = "", $login = "")
    {
        $this->student_id = $studentID;
        $this->VeilleSubject = $subject;
        parent::__construct($db, $username, $email, $password, $login);
        $this->veille_id = $veilleID;
    }

    public function Suggest()
    {
        $suggest = $this->db->send(
            "INSERT INTO veille(veille_subject,is_suggested , user_id) values(:veille_subject,:is_suggested,:user_id)",
            [
                ":veille_subject" => $this->VeilleSubject,
                ":is_suggested" => self::SUGGESTED_VEILLE,
                ":user_id" => $this->student_id
            ]
        );
    }
    public function ShowSuggest()
    {
        $show = $this->db->query("SELECT * from veille where user_id = :user_id", [":user_id" => $this->student_id]);
        return $show->fetchall();
    }
    public function DeleteSuggest()
    {
        $delete = $this->db->send(
            "DELETE FROM veille where veille_id = :veille_id",
            [":veille_id" => $this->veille_id]
        );
    }
}
