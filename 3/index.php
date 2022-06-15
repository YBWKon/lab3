<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3</title>
  </head>
<body>
<form name="adv" action="records.php" method="POST">
	<label>Ваша почта </label>
		<input type="email" name="email" />
	<br><br>
	<label>Категория</label>
		<select name="category">
			<option selected disabled>Категория</option>
			<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category)
				{
					echo "<option>{$category}</option>";
				} ?>
		</select>
	<br><br>
	<label>Заголовок</label>
		<input type="text" name="header" />
	<br><br>
	<label>Описание</label>
		<textarea name="text" rows="10" cols="50"></textarea>
	<br><br>
	<input type="submit" value="Добавить" />
</form>
</body>
</html>