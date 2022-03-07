<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"> </script>
		<script src="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"></script>
		<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
		<style>
			.container{
				width:80%;
				max-width: 800px;
				margin:0 auto;
			}
		</style>
	</head>
	<body>
		<header>
			<div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
			<h1 style="margin: 10px;" class="header">Donát blogja</h1>
		</header>
		<nav>
			<?php echo Menu::getMenu($viewData['selectedItems']); ?>
		</nav>
		<?php if($viewData['render']) include($viewData['render']); ?>
		
		
		


		
	</body>
	<footer>
		&copy; Fehér Donát, minden jog fentartva.
		
	</footer>
</html>

