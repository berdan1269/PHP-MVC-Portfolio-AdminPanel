<?php 
require APPROOT.'/views/adminlogin/head.php';
?>
<div class="navbar">
	
	


</div>
<div class="container-login">
	<div class="wrapper-login">
		<h2>Oturum Aç</h2>
		<form action=" <?php echo URLROOT ?>/controlpanels/index " method="POST" >
			<input type="text" name="username" placeholder="Kullanıcı Adı" >
			<span class="invalidFeedBack">
				<?php echo $data['usernameError']; ?>
			</span>

				<input type="password" name="password" placeholder="Şifre" >
			<span class="invalidFeedBack">
				<?php echo $data['passwordError']; ?>
			</span>

			<button id="submit" type="submit" value="Giriş Yap" >Giriş Yap</button>
		
			

		</form>
	</div>
</div>