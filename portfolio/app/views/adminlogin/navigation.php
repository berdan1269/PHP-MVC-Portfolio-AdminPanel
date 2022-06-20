<nav class="top-nav">
	<ul>
		<li>
			<a href="<?php echo URLROOT; ?>/pages/index">Anasayfa</a>
		</li>
		
		<li>
			<a href="<?php echo URLROOT; ?>/pages/about">Hakkımızda</a>
		</li>

		<li>
			<a href="<?php echo URLROOT; ?>/pages/projects">Projeler</a>
		</li>
		
		<li>
			<a href="<?php echo URLROOT; ?>/posts">Bloglar</a>
		</li>

		<li>
			<a href="<?php echo URLROOT; ?>/pages/contact">İletişim</a>
		</li>

		<li class="btn-login">
			<?php if(isset($_SESSION['user_id'])) : ?>
				<a href="<?php echo URLROOT; ?>users/logout">Çıkış Yap</a>
				<?php else : ?>
					<a href="<?php echo URLROOT; ?>users/login">Giriş Yap</a>
				<?php endif; ?>

				</li>
			</ul>
		</nav>