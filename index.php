<?php
$all_news = [
    [
        'title'=>"Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи",
        'image'=>"/images/art.jpg",
        "content" => "OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior, receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and insurance OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turnsa regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
                insurance companies. OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
                insurance companies.",
        "date" => "22.12.16"
    ],
    [
        "title" => "Название статьи 2! Название статьи 2! Название статьи 2! Название статьи 2! Название статьи 2!",
        "image"=> "/images/art.jpg",
        "content" => " OBD-IIIIIIIIIII Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
                insurance OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turnsa regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
                insurance companies. OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
                insurance companies.",
        "date" => "21.12.16"
    ],
    ];
//$new1 = [
//    "title" => "Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи Название статьи",
//    "image" => "/images/art.jpg",
//    "content" => "OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
//                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turnsa regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance companies. OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
//                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance companies.",
//    "date" => "22.12.16"
//];
//
//$new2 = [
//    "title" => "Название статьи 2! Название статьи 2! Название статьи 2! Название статьи 2! Название статьи 2!",
//    "image" => "/images/art.jpg",
//    "content" => " OBD-IIIIIIIIIII Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
//                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turnsa regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance companies. OBD-II Scanner is a multifunctional in-vehicle diagnostic and monitoring device running Android OS. It turns
//                a regular car into a smart car and allows you to take care of your relatives, analyze driver behavior,
//                receive emergency notifications, protect your car from theft, check vehicle data and save money on fuel and
//                insurance companies.",
//    "date" => "21.12.16"
//];

?>

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
                <div class="col-md-2 col-xs-3">
                    <img class="logo" src="images/logo-house.png"/>
                </div>
                <div class="col-md-3 col-md-offset-6  col-xs-6 col-xs-offset-2 ">
                    <a href="subscribe.php"><button type="button"  class="btn btn-primary" >Подписаться на рассылку</button></a>
                </div>
            </div>
        </div>
    </div>
<div class="container content-wrapper">
    <div class="row banner">
        <div class="col-xs-12 banner_wrap">
            <img class="city" src="images/city.jpg">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 news">
            <h2>Новости</h2>
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
                    <div class="aboutUs">
                        Canada IT Advance and Deliverance Corp. provides connected car, safety and security solutions worldwide. Our
                        company provides services for development and distribution of telematic solutions using the Internet and
                        software running on servers, as well as on wearable devices: smart phones, tablets, smart watches and other
                        gadgets.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
