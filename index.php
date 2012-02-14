<?php

require_once 'includes/db.php';
require_once 'includes/filter-wrapper.php';


$results = $db->query('
	SELECT id, release_date, title
	FROM movies
	ORDER BY release_date ASC
');

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	 <link rel="stylesheet" href="css/general.css">
</head>
<body class="main">
	<div class="wrapper">
		<h1>Movies</h1>
		<ul>
		<?php foreach ($results as $movs) : ?>
			<li>
				<a href="single.php?id=<?php echo $movs['id']; ?>"><?php echo $movs['title']; ?></a>
				&bull;
				<a href="delete.php?id=<?php echo $movs['id']; ?>">Delete</a>
			</li>
		<?php endforeach; ?>
		</ul>
		
	</div>
	
</body>
</html>

















