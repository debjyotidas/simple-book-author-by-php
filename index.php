<?php
	$books = [
		['name'=>'The Far Field', 'author'=>'Madhuri Vijay', 'price'=>20],
		['name'=>'The 2 States', 'author'=>'Chetan Bhagat', 'price'=>18],
		['name'=>'Selection Day', 'author'=>'Arvind Adiga', 'price'=>25],
		['name'=>'MALGUDI DAYS', 'author'=>'R.K. NARAYAN', 'price'=>20],
		['name'=>'FASTING,FEASTING ','author'=>'ANITA DESAI', 'price'=>20]
			];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BOOKS</title>
	<h1>Indian Authors</h1>
	<?php foreach ($books as $book) { ?>
		<h2><?php echo $book['name']; ?></h2>
		<h4><?php echo $book['author'];?></h4>

		<p>$<?php echo $book['price'];?></p>
		<?php }?>
</head>
<body>
	
</body>
</html>