<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
	<title>AD</title>
</head>

<body style="font-size: 20px;">
	<form action="form.php" method="post">
		<p>
			<label>Имя<br><br>
				<input placeholder="Имя" type="text" name="name" value="">
			</label>
		<p>
			<label>E-mail<br><br>
				<input placeholder="E-mail" type="text" name="email" value="">
			</label>
		</p>
		<p>
			<label>Год рождения<br><br>
					<input name="year"
					value="2021-1-1"
type="date" />
</label><br />
				</select>
			</label>
		</p>
		<p>Пол<br><br>
			<label>
				<input type="radio" name="gender" value="man">Мужской
			</label>
			<label>
				<input type="radio" name="gender" value="woman">Женский
			</label>
		</p>
		<p>Количество конечностей<br><br>
<label><input type="radio" name="numlimbs" value="M5">Менее 5</label>
<label><input type="radio" name="numlimbs" value="B5">Более 5</label><br />
		</p>
		<p>
			<label>Сверхспособности<br><br>
				<select multiple name="super-powers[]">
					<option value="immortality">Бессмертие</option>
					<option value="walkthrough-walls">Прохождение сквозь стены</option>
					<option value="levitation">Левитация</option>
				</select>
			</label>
		</p>
		<div>
			<p>
				<label>Биография<br><br>
					<textarea placeholder="Расскажите о себе" name="biography"></textarea>
				</label>
			</p>
		</div>
		<p>
			<label>
				<input type="checkbox" name="agree">С контранктом ознакомлен
				(а)
			</label>
		</p>
		<p>
			<input type="submit" value="Отправить">
		</p>
	</form>
</body>

</html>