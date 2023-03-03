<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>СКЛАДКОМЛот | Статистика</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="css/img/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="css/img/favicon/apple-touch-icon-180x180.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/libs/animate.min.css">
    <link rel="stylesheet" href="css/libs/slick.css">
    <link rel="stylesheet" href="css/libs/slick-theme.css">
    <link rel="stylesheet" href="css/libs/jquery.fancybox.css">
    <link rel="stylesheet" href="css/libs/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
<div class="header__bottom">
            <div class="inner work">
                <div class="cols">
                    <div class="col">
                        <div class="logo">
                            <img src="css/img/header/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="header__right">
                            <div class="nav">
                                <ul>
                                    <li><a href="index.php">На главную</a></li>
                                    <li><a href="index.php?tasks">Цели</a></li>
                                    <li><a href="index.php?capability">Возможности</a></li>
                                    <li><a href="index.php?equipment">Обеспечение</a></li>
                                    <li><a href="index.php?contacts">Контакты</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-blue btn-lk"><a href="login.php">Личный кабинет</a></button>
                            <div class="burger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alertWrapper">
        <div class="alert404">Страница не существует</div>
        <a href="index.htm" class="alert404__back">Вернуться на главную</a>
    </div>
    <!-- FOOTER
    ================================= -->
    <div class="footer">
        <div class="footer__top">
            <div class="inner work">
                <div class="cols">
                    <div class="col">
                        <div class="logo">
                            <img src="css/img/footer/logo.png" alt="">
                        </div>
                        <div class="copyright copyright_mob">ООО "СКЛАДКОМЛот"</div>
                    </div>
                    <div class="col">
                        <div class="footer__nav">
                            <ul>
                                <li><a href="index.php">На главую</a></li>
                                <li><a href="index.php?tasks">Цели</a></li>
                                <li><a href="index.php?capability">Возможности</a></li>
                                <li><a href="index.php?equipment">Обеспечение</a></li>
                                <li><a href="index.php?contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-red btn-callback">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="inner work">
                <div class="cols">
                    <div class="col">
                        <div class="copyright copyright_des">ООО "СКЛАДКОМЛот"</div>
                    </div>
                    <div class="col">
                        <div class="politics">
                            <a href="uploads/policy.pdf" target="_blank" rel="nofollow"><span>Политика</span> конфиденциальности</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer__right">
                            <div class="mail">
                                <a class="mail_click" href="mailto:info@biz-navi.ru" target="_blank">skladkomlot@gmail.com</a>
                            </div>
                            <div class="phone">
                                <a class="phone_click" href="tel:+74957774249">+7 (951) 154-93-97</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL
    ================================= -->
    <!--modal_callback-->
    <div class="modal modal_callback">
        <div class="popup">
            <div class="close-popup"></div>
            <div class="title">Заказать звонок</div>
            <p class="sub">Оставьте заявку, и наши специалисты свяжутся с Вами в ближайшее время.</p>
            <div class="form order__popup">
                <form method="POST" action="#" id="formModal">
                    <div class="form-group form-group_big">
                        <label class="label">Контактное лицо</label>
                        <input class="form-control" type="text" name="name" required="required" placeholder="______________________________">
                    </div>
                    <div class="form-group form-group_big">
                        <label class="label">Телефон контактного лица</label>
                        <input class="form-control mask" type="text" name="phone" required="required" placeholder="+7 (___) ___-__-__">
                    </div>
                    <div class="form-group form-group_big">
                        <label class="label">Email</label>
                        <input class="form-control" type="email" name="mail" placeholder="______________________________">
                    </div>
                    <div class="form-group form-group_big">
                        <label class="label">Компания</label>
                        <input class="form-control" type="text" name="company" required="required" placeholder="______________________________">
                    </div>
                    <p class="agree">Оставляя данные в этой форме, Вы даете согласие на обработку <a href="uploads/persInfo.pdf" class="linkTdu" rel="nofollow" target="_blank">персональных данных.</a></p>
                    <input type="submit" class="btn btn-red btn-send btnFix form_click" name="btn-send" value="Оставить заявку" onclick="sendFormModal('formModal'); return false;">
                </form>
                
            </div>
        </div>
    </div>

    <!--modal_callback-->
    <div class="modal modal_thanks">
        <div class="popup">
            <div class="close-popup"></div>
            <div class="img">
                <img src="css/img/thank.svg" alt="Галочка">
            </div>
            <div class="title">Ваша заявка отправлена </div>
            <p class="sub">Наш менеджер свяжется с Вами<br> в ближайшее время </p>
            
        </div>
    </div>

    <script src="js/libs/jquery-3.5.1.min.js"></script> 
    <script src="js/libs/jquery.fancybox.min.js"></script> 
    <script src="js/libs/slick.min.js"></script> 
    <script src="js/libs/jquery.maskedinput.min.js"></script> 
    <script src="js/libs/wow.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>