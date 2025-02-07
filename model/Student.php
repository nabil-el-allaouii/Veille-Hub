<?php

class Student extends Users
{
    private $student_id;
    private $VeilleSubject;
    private const SUGGESTED_VEILLE = true;

    public function __construct($db, $studentID, $subject, $username = "", $email = "", $password = "", $login = "")
    {
        $this->student_id = $studentID;
        $this->VeilleSubject = $subject;
        parent::__construct($db, $username, $email, $password, $login);
    }

    public function Suggest()
    {
        $suggest = $this->db->send(
            "INSERT INTO veille(veille_subject,is_suggested) values(:veille_subject,:is_suggested)",
            [
                ":veille_subject" => $this->VeilleSubject,
                ":is_suggested" => self::SUGGESTED_VEILLE
            ]
        );
    }
    
}
