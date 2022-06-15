<?php

error_reporting(E_ALL ^ E_WARNING);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$path = "categories/{$_POST['category']}/{$_POST['email']}";
	mkdir($path);
	file_put_contents($path . '/' . $_POST['header'] . '.txt', $_POST['text']);
}
?>

<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3</title>
  </head>
<body>
<table>
	<tr>
		<th>Почта</th>
		<th>Категория</th>
		<th>Описание</th>
	</tr>
	<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category)
	{
		foreach (array_diff(scandir("categories/{$category}"), ['.', '..']) as $email)
		{
			foreach (array_diff(scandir("categories/{$category}/{$email}"), ['.', '..']) as $adv)
			{
				echo "	<tr>
					<td>$email</td>
					<td>$category</td>
					<td>" . file_get_contents("categories/{$category}/{$email}/{$adv}") . "</td>
				</tr>";
			}
		}
	} ?>
</table>
</body>
</html>
