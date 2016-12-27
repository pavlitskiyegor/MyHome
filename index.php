<?php
$file_path = "http://secretic.bget.ru/news.json";
$news_json = file_get_contents($file_path);
$all_news = json_decode($news_json, true);
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
        <link rel="stylesheet" href="css/libs/animation.css">
        <link rel="stylesheet" href="css/libs/fontello-ie7.css">

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
    <?php
        require('header.php');
    ?>
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
        <div class="date col-xs-12"> <div title="Code: 0xe800" class="the-icons span3"><i class="demo-icon icon-calendar">&#xe800;</i> <span class="i-name">icon-calendar</span><span class="i-code">0xe800</span></div><?php echo $v['date'];?></div>
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
