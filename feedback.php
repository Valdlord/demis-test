<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!--    <link rel="icon" type="image/png" href="https://example.com/favicon.png">-->
    <title>Форма обратной связи</title>
    <meta name="description" content="Landing description">
    <meta name="keywords" content="meta, meta теги, seo">
    <meta property="og:title" content="Форма обратной связи">
    <meta name="twitter:title" content="Форма обратной связи">
    <link href="style/landing-page.css" rel="stylesheet" type="text/css">
    <!--	<link href="style/landing-page.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 480px)">-->
    <script defer src="js/action.js"></script>
</head>
<body>
<div class="page-wrapper">
    <header class="header">
        <div class="container">
            <h1 class="first-title title-line">Форма обратной связи</h1>
        </div>
    </header>
    <main class="landing-page-content">
        <section class="section-feedback">
            <div class="container">
                <form class="feedback-form">
                    <input
                            class="feedback-form__item"
                            type="text"
                            name="name"
                            placeholder="ФИО"
                            required>
                    <span class="error js-error-name">ФИО содержит ошибку</span>
                    <input
                            class="feedback-form__item"
                            type="text"
                            name="address"
                            placeholder="Введите адрес"
                            required>
                    <span class="error js-error-address">В адресе ошибка</span>
                    <input
                            class="feedback-form__item feedback-phone"
                            type="tel"
                            name="phone"
                            placeholder="Введите телефон"
                            required>
                    <span class="error js-error-phone">Телефон не указан</span>
                    <input
                            class="feedback-form__item"
                            type="tel"
                            name="email"
                            placeholder="Введите Email"
                            required>
                    <span class="error js-error-email">Email содержит ошибку</span>
                    <button
                            class="btn js-btn-send "
                            type="button"
                            name="btn">Отправить
                    </button>
                </form>
                <a class="link-item" href="index.php">На главную</a>
            </div>

        </section>
        <section class="section-2">
            <div class="container">

            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <nav></nav>
            <address></address>
        </div>
    </footer>
</div>

<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
</body>
</html>