<?php 
class Controlpanels extends Controller {
	public function __construct(){

		$this->controlModel = $this->model('ControlPanel');

	}

	public function index(){               //login kısmı



		$data = [
			'title'=> 'Admin Login Page',
			'username'=>'',
			'password'=>'',
			'usernameError'=>'',
			'passwordError'=>''

		];
				//post gönderilirse
		if($_SERVER['REQUEST_METHOD']=='POST'){//
				$_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);  //remove data that is potantiality harmful for your application mış.
				$data =[
					'username'=>trim($_POST['username']),
					'password'=>trim($_POST['password']),
					'usernameError'=> '',
					'passwordError'=> ''

				];


				//dogrulama işlemleri
				if(empty($data['username'])){
					$data['usernameError'] = 'Lütfen kullanıcı adınızı giriniz.';
				}
				if(empty($data['password'])){
					$data['passwordError'] = 'Lütfen şifrenizi giriniz.';
				}

			//error yoksa 
				if(!empty($data['username']) && !empty($data['password'])){
					$loggedInUser =$this->controlModel->login($data['username'],$data['password']);

					if ($loggedInUser) {
						$this->creatUserSession($loggedInUser);						

					}else{
						$data['passwordError'] = "Şifre hatalıdır.Lütfen tekrar girmeyi deneyiniz.";
						$this->view('adminlogin/login',$data);

					}

				}

			}else{
				$data = [
					'username'=>'',
					'password'=>'',
					'usernameError'=>'',
					'passwordError'=>''

				];

			}
        
        if(!empty($_SESSION['username'])){

            //header('location:'.URLROOT.'/AdminInside/adminlogin');
            $this->view('admincontrol/index');    //neden viewle olmuyor ?
            die();

        }


			$this->view('adminlogin/login',$data);

		}

		public function creatUserSession($user){
			
			$_SESSION['user_id'] = $user->id;
			$_SESSION['username'] = $user->username;
			$_SESSION['email'] = $user->email;







		}




		


}




?>