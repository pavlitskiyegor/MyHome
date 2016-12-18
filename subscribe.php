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
                <div class="col-md-12 col-xs-12">
                    <a href="index.php"><span class="address">Жилой комлекс "Парковый" г.Таганрог, пер. Большой Садовый</span>
                    </a>
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
        <span class="col-xs-12 title_subscribe">Для подписки на почтовую рассылку введите в форму свои контактные данные
        </span>
    <div class="subscribe">
        <form action="register.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-xs-3" for="lastName">ФИО:</label>
                <div class="col-md-6 col-xs-9">
                    <input type="text" class="form-control" id="lastName" placeholder="Введите ФИО">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="postalAddress">Номер квартиры:</label>
                <div class="col-md-6 col-xs-9">
                    <input type="number" class="form-control" id="postalAddress" placeholder="Введите номер квартипы">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                <div class="col-md-6 col-xs-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
                <div class="col-md-6 col-xs-9">
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
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
                        Canada IT Advance and Deliverance Corp. provides connected car, safety and security solutions worldwide. Ourcol-xs-9
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
