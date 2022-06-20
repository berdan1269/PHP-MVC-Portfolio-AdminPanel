<?php

class Admin extends Controller
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;

    }

    public function findSocialMedia()
    {
        $this->db->query('SELECT * FROM socialmedia ');

        $row = $this->db->single();

        return $row;

    }

    public function findNavbarTitles()
    {
        $this->db->query('SELECT * FROM navbartitles ');

        $row = $this->db->single();

        return $row;

    }

    public function findFirstTitleInside()
    {
        $this->db->query('SELECT * FROM firsttitleinside ');

        $row = $this->db->single();


        return $row;

    }

    public function findSkills()
    {

        $this->db->query("SELECT * FROM skills ");

        $results = $this->db->resultSet();

        return $results;

    }

    public function findSkillById($id){
        $this->db->query('SELECT * FROM skills WHERE id= :id');

        $this->db->bind(':id',$id);

        $row=$this->db->single();

        return $row;


    }





    public function updateSocialMedia($data)
    {

        $this->db->query('UPDATE socialmedia SET facebook = :facebook , instagram = :instagram , linkedin = :linkedin ');
        $this->db->bind(':facebook', $data['facebook']);
        $this->db->bind(':instagram', $data['instagram']);
        $this->db->bind(':linkedin', $data['linkedin']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }

    public function updateNavbarTitles($data)
    {
        $this->db->query('UPDATE navbartitles SET firsttitle = :firsttitle , secondtitle = :secondtitle , thirdtitle = :thirdtitle , fourthtitle = :fourthtitle , fifthtitle = :fifthtitle ');
        $this->db->bind(':firsttitle', $data['firstTitle']);
        $this->db->bind(':secondtitle', $data['secondTitle']);
        $this->db->bind(':thirdtitle', $data['thirdTitle']);
        $this->db->bind(':fourthtitle', $data['fourthTitle']);
        $this->db->bind(':fifthtitle', $data['fifthTitle']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }

    public function updateFirstTitleInside($data)
    {
        $this->db->query('UPDATE firsttitleinside SET firsttitle = :firsttitle , secondtitle = :secondtitle , thirdtitle = :thirdtitle ,thirdcontent = :thirdcontent, fourthcontent = :fourthcontent , firstcontent = :firstcontent, secondcontent = :secondcontent , birthday = :birthday , website = :website , phone = :phone , city = :city , age = :age, degree = :degree, emailone = :emailone, freelance = :freelance ');

        $this->db->bind(':firsttitle', $data['firstTitle']);
        $this->db->bind(':secondtitle', $data['secondTitle']);
        $this->db->bind(':thirdtitle', $data['thirdTitle']);
        $this->db->bind(':fourthcontent', $data['fourthContent']);
        $this->db->bind(':thirdcontent', $data['thirdContent']);
        $this->db->bind(':secondcontent', $data['secondContent']);
        $this->db->bind(':firstcontent', $data['firstContent']);
        $this->db->bind(':birthday', $data['birthday']);
        $this->db->bind(':website', $data['website']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':degree', $data['degree']);
        $this->db->bind(':emailone', $data['emailone']);
        $this->db->bind(':freelance', $data['freelance']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }

    public function updateSkills($data){

        $this->db->query('UPDATE skills SET skills_name = :skills_name , skills_score = :skills_score WHERE id = :id  ');
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':skills_name', $data['skills_name']);
        $this->db->bind(':skills_score', $data['skills_score']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function addSkill($data){
        $this->db->query('INSERT INTO skills (skills_name, skills_score) VALUES(:skills_name, :skills_score)');


        $this->db->bind(':skills_name',$data['skills_name']);

        $this->db->bind(':skills_score',$data['skills_score']);

        if ($this->db->execute()) {
            return true;
        }
        else{
            return false;
        }


    }

    public function skillDelete($id){

        $this->db->query('DELETE FROM skills WHERE id= :id');
        $this->db->bind(':id',$id);

        if ($this->db->execute()) {
            return true;
        }
        else{
            return false;
        }

    }


}


?>