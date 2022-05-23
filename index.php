
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <title>AD</title>
</head>
<body >
    <div class="wrapper">
      <div id="form">
              <form action="form.php" method="POST">
                <label><a id="Форма"></a>
               
 <label>
  <strong> Имя пользователя:</strong> <br/>
     <input id="field1" type="text" name="name" placeholder="Имя" class="fields"/>
 </label> 
 <br/>  
 <label>
  <strong> E-mail пользователя:</strong><br />
<input name="email" type="email" placeholder="Ваша почта" class="fields"/>
  </label><br />
<label>
  <strong> Ваша дата рождения:</strong><br />
<input name="data"
value="2021-1-1"
type="date" />
</label><br />
<strong>Пол:</strong><br />
<label><input type="radio" name="sex" value="M">Мужской</label>
<label><input type="radio" name="sex" value="M">Женский</label>
<label><input type="radio" name="sex" value="W">Другой</label><br />

<strong>Количество конечностей:</strong><br />
<label><input type="radio" name="col_con" value="M5">Менее 5</label>
<label><input type="radio" name="col_con" value="B5">Более 5</label><br />

<strong>Сверхспособности:</strong><br />
<select name="sverh">
<option value="Значение1">Бессмертие</option>
<option value="Значение2" selected="selected">Прохождение через стены</option>
<option value="Значение3">Левитация</option>
</select>
</label><br />
<label>
  <strong>Биография:</strong><br/>
<textarea name="biography" placeholder="Расскажите немного о себе" class="fields"></textarea>
</label> 
<br/>
              <br /><label><strong><input type="checkbox" name="check" value="1" >С контрактом ознакомлен</strong></label>
              <br /><input type="submit" value="Отправить" >
              </form>
      </div>
    </div>
</body>
</html>