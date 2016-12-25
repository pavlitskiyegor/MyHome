<?php
//error_reporting(E_ALL);
//ini_set('display_errors', true);

$user = [
    "lastName" => $_POST['lastName'],
    "postalAddress" => $_POST['postalAddress'],
    "inputEmail" => $_POST['inputEmail'],
    "phoneNumber" => $_POST['phoneNumber']
];

$file = file_get_contents("files/users.json");//считываем json строкку из файла и записываем в переменную $file
$users = json_decode($file);//перевод из json строки в php синтаксис и записывает в переменную $users, в $users получаем пустой массив
$users[] = $user;//добавляем в массив новый элемент $user получаем в $users масссив массивов [$user]
$result_string = json_encode($users);//переводим переменную $users из php синтаксиса в json строкку
file_put_contents("files/users.json", $result_string);//записываем полученную json строку $result_string в файл


//file_put_contents("files/users.json", json_encode($user))

//$users_json = file_get_contents("files/users.json");
//$users = json_decode($users_json, true);
//var_dump($users);
//var_dump (json_encode($user));
//$users[] = $user;
//file_put_contents("files/users.json", json_encode($users));

//$file = fopen("files/test.txt", 'a+');
//fwrite($file, 'aaaa');
//fclose($file);
//
//?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="css/libs/normolize.css">
    <link rel="stylesheet" href="css/libs/bootstrap.css">
    <link rel="stylesheet" href="css/build/style.css" type="text/css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-7 col-xs-12">
                    <div class="address"><a href="index.php">Жилой комлекс "Парковый" г.Таганрог, пер. Большой Садовый дом 13, корпус 5</a></div>

                </div>
            </div>
        </div>
    </div>
    <div class="container content-wrapper">
        <div class="row banner">
            <div class="col-xs-12 banner_wrap">
                <img class="city" src="images/banner-005.jpg">
            </div>
        </div>
    <div class="row ">
        <div class="col-xs-12 title_subscribe">Подписка на рассылку
        </div>
        <div class="col-xs-12 title_form">Для подписки на почтовую рассылку введите в форму свои контактные данные</div>
    <div class="subscribe">
        <form action="subscribe.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label form_text col-md-3 col-sm-3 col-xs-12" for="lastName">ФИО:<span class="star"> *</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="input-align form-control" id="lastName" name="lastName" placeholder="Фамилия Имя Отчество">
                </div>
            </div>
            <div class="form-group">
                <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="postalAddress">Номер квартиры:<span class="star">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="number" min="1" max="1000" class="form-control" id="postalAddress" name="postalAddress" placeholder="Номер квартиры">
                </div>
            </div>
            <div class="form-group">
                <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="inputEmail">Email:<span class="star"> *</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Аадрес электронной почты">
                </div>
            </div>
            <div class=" form-group">
                <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="phoneNumber">Телефон: </label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Номер телефона +74951234567">
                </div>
            </div>
                <div class="col-xs-12 col-md-8 star">* - поля обязательные поля для заполнения</div>
            <div class="col-xs-12 form-group">
                <div class="form_text col-xs-12">
                    <input type="submit" class="btn btn-primary" value="Подписаться">
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="container aboutUs">
            <div class="row ">
                <div class="col-xs-12 " >
                    <div class="aboutUs">
                        © 2008-2016. Все права защищены 2016-2016.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
