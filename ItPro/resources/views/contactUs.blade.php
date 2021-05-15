<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/mailContactUs">
@csrf

    <div class="form-group">
    <label for="name">введите имя</label>
    <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="email">введите Email</label>
    <input type="text" name="email" placeholder="введите емаил" id="email" class="form-control">
    </div>
    <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" placeholder="введите тему" id="subject" class="form-control">
    </div>

    <div class="form-group">
    <label for="messege">Cообщения</label><br>
    <textarea type="text" name="messege" placeholder="введите сообщение" id="message" class="form-control">
    </textarea>
    </div>

    <button type="submit" class="btn btn-success">Отпарвить</button> 

</form>
</body>
</html>