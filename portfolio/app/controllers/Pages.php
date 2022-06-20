<?php
class Pages extends Controller {
    public function __construct() {
        $this->pagesModel = $this->model('Admin');
        

    }

    public function index() {
         $post=$this->pagesModel->findSocialMedia();
         $post2=$this->pagesModel->findNavbarTitles();
         $post3=$this->pagesModel->findFirstTitleInside();
         $post4=$this->pagesModel->findSkills();
        
        $data = [
            'title' => 'Home page',
            'settings' => $post,
            'navbartitles'=>$post2,
            'firsttitleinside'=>$post3,
            'skills'=>$post4


        ];

        $this->view('pages/index', $data);
    }

    public function adminlogin(){

    	$data = [
            "title"=> "Admin Panel"
    	];
    	$this->view('sbadmin/index',$data);
    }

    }



 ?>