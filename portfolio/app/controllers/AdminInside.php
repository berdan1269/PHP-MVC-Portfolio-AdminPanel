<?php

class adminInside extends Controller
{


    public function __construct()
    {
        $this->adminInsideModel = $this->model('Admin');   //?? neden this şeklinde  ??

        if (empty($_SESSION['username'])) {
            $data = [
                "title" => "Yönlendirme",
                'usernameError' => '',
                'passwordError' => ''

            ];

            $this->view('adminlogin/login', $data);
            die();


        }

    }


    public function adminlogin()
    {        //yönlendirme
        $this->view('admincontrol/index');
    }



    public function logout()
    {
        $data = [
            "title" => "Çıkış Yönlendirmesi ",
            'usernameError' => '',
            'passwordError' => ''
        ];

        session_destroy();
        $this->view('adminlogin/login', $data);

    }


    public function socialMedia()
    {
        $post = $this->adminInsideModel->findSocialMedia();
        $data = [
            'post' => $post,
            'facebook' => '',
            'instagram' => '',
            'linkedin' => '',
            'facebookError' => '',
            'instagramError' => '',
            'linkedinError' => ''
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'post' => $post,
                'facebook' => trim($_POST['facebook']),
                'instagram' => trim($_POST['instagram']),
                'linkedin' => trim($_POST['linkedin']),
                'facebookError' => '',
                'instagramError' => '',
                'linkedinError' => ''
            ];

            if (empty($data['facebook'])) {
                $data['facebookError'] = 'Lütfen adres giriniz..';

            }
            if (empty($data['instagram'])) {
                $data['instagramError'] = 'Lütfen adres giriniz..';

            }
            if (empty($data['linkedin'])) {
                $data['linkedinError'] = 'Lütfen adres giriniz..';

            }

            if (!empty($data['facebook']) && !empty($data['instagram']) && !empty($data['linkedin'])) {
                if ($this->adminInsideModel->updateSocialMedia($data)) {
                    header("Location:" . URLROOT . "/adminInside/adminlogin");

                } else {
                    die("Bir şeyler yanlış gitti Lütfen tekrar deneyiniz.");
                }
            } else {
                $this->view('admincontrol/socialmedia', $data);  //socialmedia viewi oluştur.

            }

        }

        $this->view('admincontrol/socialmedia', $data);


    }


    public function navbarTitles()
    {
        $post = $this->adminInsideModel->findNavbarTitles();
        $data = [
            'post' => $post,
            'firstTitle' => '',
            'secondTitle' => '',
            'thirdTitle' => '',
            'fourthTitle' => '',
            'fifthTitle' => '',
            'firstTitleError' => '',
            'secondTitleError' => '',
            'thirdTitleError' => '',
            'fourthTitleError' => '',
            'fifthTitleError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'post' => $post,
                'firstTitle' => trim($_POST['firstTitle']),
                'secondTitle' => trim($_POST['secondTitle']),
                'thirdTitle' => trim($_POST['thirdTitle']),
                'fourthTitle' => trim($_POST['fourthTitle']),
                'fifthTitle' => trim($_POST['fifthTitle']),
                'firstTitleError' => '',
                'secondTitleError' => '',
                'thirdTitleError' => '',
                'fourthTitleError' => '',
                'fifthTitleError' => ''

            ];

            if (empty($data['firstTitle'])) {
                $data['firstTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['secondTitle'])) {
                $data['secondTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['thirdTitle'])) {
                $data['thirdTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['fourthTitle'])) {
                $data['fourthTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['fifthTitle'])) {
                $data['fifthTitleError'] = 'Lütfen baslıgı giriniz..';

            }

            if (!empty($data['firstTitle']) && !empty($data['secondTitle']) && !empty($data['thirdTitle']) && !empty($data['fourthTitle']) && !empty($data['fifthTitle'])) {
                if ($this->adminInsideModel->updateNavbarTitles($data)) {
                    header("Location:" . URLROOT . "/adminInside/adminlogin");

                } else {
                    die("Bir şeyler yanlış gitti Lütfen tekrar deneyiniz.");
                }
            } else {
                $this->view('admincontrol/navbartitles', $data);  //navbar viewi oluşturmayı unutma

            }

        }

        $this->view('admincontrol/navbartitles', $data);


    }

    public function firstTitleInside()
    {

        $post = $this->adminInsideModel->findFirstTitleInside();
        $data = [
            'post' => $post,
           
            'firstTitleError' => '',
            'firstContentError' => '',
            'secondTitleError' => '',
            'secondContentError' => '',
            'thirdContentError' => '',
            'thirdTitleError' => '',
            'fourthContentError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'post' => $post,
                'firstTitle' => trim($_POST['firstTitle']),
                'firstContent' => trim($_POST['firstContent']),
                'secondTitle' => trim($_POST['secondTitle']),
                'secondContent' => trim($_POST['secondContent']),
                'birthday' => trim($_POST['birthday']),
                'website' => trim($_POST['website']),
                'phone' => trim($_POST['phone']),
                'city' => trim($_POST['city']),
                'age' => trim($_POST['age']),
                'degree' => trim($_POST['degree']),
                'emailone' => trim($_POST['emailone']),
                'freelance' => trim($_POST['freelance']),
                'thirdContent' => trim($_POST['thirdContent']),
                'thirdTitle' => trim($_POST['thirdTitle']),
                'fourthContent' => trim($_POST['fourthContent']),
                'firstTitleError' => '',
                'firstContentError' => '',
                'secondTitleError' => '',
                'secondContentError' => '',
                'thirdContentError' => '',
                'thirdTitleError' => '',
                'fourthContentError' => ''
            ];

            if (empty($data['firstTitle'])) {
                $data['firstTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['firstContent'])) {
                $data['firstContentError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['secondTitle'])) {
                $data['secondTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['secondContent'])) {
                $data['secondContentError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['thirdContent'])) {
                $data['thirdContentError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['thirdTitle'])) {
                $data['thirdTitleError'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['fourthContent'])) {
                $data['fourthContentError'] = 'Lütfen baslıgı giriniz..';

            }
            if (!empty($data['firstTitle']) && !empty($data['secondTitle']) && !empty($data['thirdTitle']) && !empty($data['fourthContent']) && !empty($data['firstContent']) && !empty($data['secondContent']) && !empty($data['thirdContent'])) {
                if ($this->adminInsideModel->updateFirstTitleInside($data)) {
                    header("Location:" . URLROOT . "/adminInside/adminlogin");

                } else {
                    die("Bir şeyler yanlış gitti Lütfen tekrar deneyiniz.");
                }
            } else {
                $this->view('admincontrol/firsttitleinside', $data);  //firstitleinside viewi oluşturmayı unutma

            }


        }

        $this->view('admincontrol/firsttitleinside', $data);


    }

    public function skills()
    {
        $post = $this->adminInsideModel->findSkills();
        $data = [
            'post' => $post,
            'skills_name' => '',
            'skills_score' => '',
            'skills_name_error' => '',
            'skills_score_error' => ''

        ];
        $this->view('admincontrol/skillsinside', $data);
    }


    public function skillsUpdate($id)
    {


        $post = $this->adminInsideModel->findSkillById($id);
        $data = [
            'post' => $post,
            'skills_name' => '',
            'skills_score' => '',
            'skills_name_error' => '',
            'skills_score_error' => ''

        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'post' => $post,
                'id' => $id,
                'skills_name' => trim($_POST['skills_name']),
                'skills_score' => trim($_POST['skills_score']),
                'skills_name_error' => '',
                'skills_score_error' => ''

            ];
            if (empty($data['skills_name'])) {
                $data['skills_name_error'] = 'Lütfen baslıgı giriniz..';

            }
            if (empty($data['skills_score'])) {
                $data['skills_score_error'] = 'Lütfen baslıgı giriniz..';

            }
            if (!empty($data['skills_name']) && !empty($data['skills_score'])) {

                if ($this->adminInsideModel->updateSkills($data)) {
                    header("Location:" . URLROOT . "/adminInside/skills");

                } else {
                    die("Bir şeyler yanlış gitti Lütfen tekrar deneyiniz.");
                }
            } else {
                $this->view('admincontrol/skillsinside', $data);  //firstitleinside viewi oluşturmayı unutma

            }


        }

        $this->view('admincontrol/skillsinside', $data);


    }

    public function newskills()
    {
        $data = [
            'skills_name' => '',
            'skills_score' => '',
            'skills_name_error' => '',
            'skills_score_error' => ''
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'skills_name' => trim($_POST['skills_name']),
                'skills_score' => trim($_POST['skills_score']),
                'skills_name_error' => '',
                'skills_score_error' => ''

            ];

            if (empty($data['skills_name'])) {
                $data['skills_name_error'] = 'Lütfen başlık giriniz..';

            }
            if (empty($data['skills_score'])) {
                $data['skills_score_error'] = 'Lütfen başlık giriniz..';
                

            }
            if (!empty($data['skills_name']) && !empty($data['skills_score'])) {

                if ($this->adminInsideModel->addSkill($data)) {
                    header("Location:" . URLROOT . "/adminInside/skills");

                } else {
                    die("Bir şeyler yanlış gitti Lütfen tekrar deneyiniz.");
                }
            } else {
                $this->view('admincontrol/newskillsinside', $data);  //firstitleinside viewi oluşturmayı unutma

            }


        }

        $this->view('admincontrol/newskillinside', $data);


    }


    public function deleteskill($id){
        $post = $this->adminInsideModel->findSkillById($id);
        $this->adminInsideModel->skillDelete($id);
        header("Location:".URLROOT."/adminInside/skills");

    }

}


?>