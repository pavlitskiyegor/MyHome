<?php
//error_reporting(E_ALL);
//ini_set('display_errors', true); //показывает ошибки
define('SUCCESS', 1);
define('EXIST_USER', 2);
function existUser($email){
    $file_path = "files/XXexCVyjA2.json";
    $users_json = file_get_contents($file_path);
    $users = json_decode($users_json, true);
    foreach($users as $user){
        if($user['inputEmail'] == $email){
            return true;
        }
    }
    return false;
}
function addNewUser($user){
    $file_path = "files/XXexCVyjA2.json";
    $users_json = file_get_contents($file_path);
    $users = json_decode($users_json, true);
    $users[] = $user;
    file_put_contents($file_path, json_encode($users, JSON_UNESCAPED_UNICODE));
}
$user = [
    "lastName" => '',
    "postalAddress" => '',
    "inputEmail" => '',
    "phoneNumber" => ''
];
$errors = [];
if (isset($_POST['submit'])) {
    $user = [
        "lastName" => trim($_POST['lastName']),
        "postalAddress" => trim($_POST['postalAddress']),
        "inputEmail" => trim($_POST['inputEmail']),
        "phoneNumber" => trim($_POST['phoneNumber'])
    ];

    if(existUser($user['inputEmail'])){
        setcookie ("subcribe", EXIST_USER, time() + 120);
        header( 'Location: /subscribe.php' );
    }else{
        if (!isset($user['lastName']) || empty($user['lastName'])) {
            $errors['lastName'] = 'Поле "ФИО" не должно быть пустым.';
        }
        if (!isset($user['postalAddress']) || empty($user['postalAddress'])) {
            $errors['postalAddress'] = 'Поле "Номер квартиры" не должно быть пустым.';
        }
        if (!isset($user['inputEmail']) || empty($user['inputEmail'])) {
            $errors['inputEmail1'] = 'Поле "Email" не должно быть пустым.';
        }
        if (!isset($user['inputEmail']) || !filter_var($user['inputEmail'], FILTER_VALIDATE_EMAIL)) {
            $errors['inputEmail2'] = 'Указан некорректный адрес электронной почты';
        }

        if(count($errors) == 0){
            addNewUser($user);
            $user = [
                "lastName" => '',
                "postalAddress" => '',
                "inputEmail" => '',
                "phoneNumber" => ''
            ];

            setcookie ("subcribe", SUCCESS, time() + 120);
            header( 'Location: /subscribe.php' );
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Жилой комлекс "Парковый" г.Таганрог, пер. Большой Садовый дом 13, корпус 5</title>
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
            <img class="city" src="images/banner-007.jpg">
        </div>
    </div>
    <div class="row ">
        <div class="col-xs-12 news">Подписаться на рассылку новостей</div>
        <?php if (isset($_POST['submit'])) { ?>
            <?php if(count($errors) > 0){ ?>
                <div class="col-xs-12 errors">
                    <?php foreach($errors as $error){ ?>
                        <p><?php echo $error; ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
        <?php if(isset($_COOKIE["subcribe"]) && $_COOKIE["subcribe"] == SUCCESS){
            setcookie ("subcribe", "", time() - 3600);
            ?>
            <div class="col-xs-12 successfully">
                Вы успешно подписались на рассылку.
            </div>
        <?php } ?>
        <?php if(isset($_COOKIE["subcribe"]) && $_COOKIE["subcribe"] == EXIST_USER){
            setcookie ("subcribe", "", time() - 3600);
            ?>
            <div class="col-xs-12 signed">
                Вы уже подписаны на рассылку.
            </div>
        <?php } ?>
        <div class="col-xs-12 title_form">Для того, чтобы подписаться на почтовую рассылку необходимо заполнить форму.</div>
        <div class="subscribe">
            <form action="subscribe.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label form_text col-md-3 col-sm-3 col-xs-12" for="lastName">ФИО:<span class="star"> *</span></label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" class="input-align form-control" id="lastName" name="lastName" placeholder="Фамилия Имя Отчество" maxlength="50" value="<?php echo  $user['lastName']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="postalAddress">Номер квартиры:<span class="star">*</span></label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" min="1" max="1000" class="form-control" id="postalAddress" name="postalAddress" placeholder="Номер квартиры" maxlength="4" value="<?php echo  $user['postalAddress']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="inputEmail">Email:<span class="star"> *</span></label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Адрес электронной почты" maxlength="50" value="<?php echo  $user['inputEmail']; ?>">
                    </div>
                </div>
                <div class=" form-group">
                    <label class="form_text control-label col-md-3 col-sm-3 col-xs-12" for="phoneNumber">Телефон: </label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Номер телефона +74951234567" maxlength="20" value="<?php echo  $user['phoneNumber']; ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 star">* - поля обязательные поля для заполнения</div>
                <div class="col-xs-12 form-group">
                    <div class="form_text col-xs-12">
                        <input type="submit" class="btn btn-primary" value="Подписаться" name="submit">
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
                    © 2016-2016. Все права защищены.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>