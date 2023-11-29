<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Zakat Fitrah</title>
  <link rel="icon" type="image/x-icon" href="<?=AST; ?>/img/eid-mubarak.png">
  <link rel="stylesheet" href="<?=AST; ?>/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
	<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
	?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>

</html>