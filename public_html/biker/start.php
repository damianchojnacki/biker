<?php include "start_header.php"; ?>

		<div class="container">
			<ul id="sortable">
				<?php
					require "config.php";
					require "functions.php";

					wyswietl_glowna();
				?>

				<li><div id="user" class="block">
					<img src="images/user.svg">
					<div class="handle">&#xf047;</div>
					<div class="suwak">Profil użytkownika</div>
				</div></li>
			</ul>
		</div>

<?php include "start_footer.php"; ?>
