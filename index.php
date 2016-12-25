<?php
$all_news = [
    ['title'=>"С 20 по 23 декабря рождественский караван Coca-Cola посетит Ростовскую область",
        'image'=>"images/img-0001.jpg",
        "content" => "Об этом сообщает пресс-служба компании.
Первой остановкой станет село Кулешовка Азовского района. 
20 декабря караван приедет в социально-реабилитационный центр «Пеликан», чтобы подарить детям подарки в рамках акции «Подари Подарок!». В тот же день рождественский караван посетит Азовский центр помощи детям.
21 декабря сотрудники Coca-Cola поздравят детей-подопечных двух социально-реабилитационных центров для несовершеннолетних. 
А вечером красные фирменные грузовики проедут по главным улицам города, чтобы подарить волшебную праздничную атмосферу его жителям.
А 23 декабря караван отправится в Таганрог в городской центр помощи детям, оказавшимся в трудной жизненной ситуации.Об этом сообщает пресс-служба компании.
Первой остановкой станет село Кулешовка Азовского района. 
20 декабря караван приедет в социально-реабилитационный центр «Пеликан», чтобы подарить детям подарки в рамках акции «Подари Подарок!». В тот же день рождественский караван посетит Азовский центр помощи детям.
21 декабря сотрудники Coca-Cola поздравят детей-подопечных двух социально-реабилитационных центров для несовершеннолетних. 
А вечером красные фирменные грузовики проедут по главным улицам города, чтобы подарить волшебную праздничную атмосферу его жителям.
А 23 декабря караван отправится в Таганрог в городской центр помощи детям, оказавшимся в трудной жизненной ситуации.",
        "date" => "17-12-2016 11:33 "
    ],
    [
        "title"=>"Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи",
        'image'=>"images/no_foto.png",
        "content" => "Об этом сообщает пресс-служба компании.
Первой остановкой станет село Кулешовка Азовского района. 
20 декабря караван приедет в социально-реабилитационный центр «Пеликан», чтобы подарить детям подарки в рамках акции «Подари Подарок!». В тот же день рождественский караван посетит Азовский центр помощи детям.
21 декабря сотрудники Coca-Cola поздравят детей-подопечных двух социально-реабилитационных центров для несовершеннолетних. 
А вечером красные фирменные грузовики проедут по главным улицам города, чтобы подарить волшебную праздничную атмосферу его жителям.
А 23 декабря караван отправится в Таганрог в городской центр помощи детям, оказавшимся в трудной жизненной ситуации.",
        "date" => "16-12-2016 09:25"
    ],
];
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
                    <div class="address">Жилой комлекс "Парковый" г.Таганрог, пер. Большой Садовый дом 13, корпус 5</div>
                </div>
                <div class="col-md-4 col-md-offset-3 col-sm-5 col-xs-12 btn-subscribe ">
                    <a href="subscribe.php"><button type="button"  class="btn btn-primary">Подписаться на рассылку</button></a>
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
    <div class="row">
        <div class="col-xs-12 news">
            Новости
        </div>
    </div>
    <?php foreach ($all_news as $v){?>
    <div class="row article">
        <div class="col-xs-12 article_title" >
            <h3><?php echo $v['title']; ?></h3>
        </div>
        <div class="col-md-4 pic col-xs-12">
            <img class="art" src="<?php echo $v['image'];?>"/>
        </div>
            <div class="col-md-8 col-sm-12 text">
                <?php echo $v['content']; ?>
            </div>
        <div class="date col-xs-12"><?php echo $v['date'];?></div>
    </div>
    <?php } ?>

</div>
    <div class="footer">
        <div class="container aboutUs">
            <div class="row ">
                <div class="col-xs-12 " >
                    © 2016-2016 Все права защищены.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
