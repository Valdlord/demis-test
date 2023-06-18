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
    <title>Новости</title>
    <meta name="description" content="Новости">
    <meta name="keywords" content="meta, meta теги, seo">
    <meta property="og:title" content="Новости">
    <meta name="twitter:title" content="Новости">
    <link href="style/landing-page.css" rel="stylesheet" type="text/css">
    <!--	<link href="style/landing-page.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 480px)">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="js/action.js"></script>
</head>
<body>
<div class="page-wrapper">
    <header class="header">
        <div class="container">
            <h1 class="first-title news-title mx-auto title-line">Новости</h1>
        </div>
    </header>
    <main class="landing-page-content">
        <section class="section-news">
            <div class="container">
                <div class="row">
                    <?php
                    require_once "db.php";
                    $showNews = $db->query("
                                        SELECT name, text, date
                                        FROM news
                                        ");

                    $news = $showNews->fetchAll();
                    foreach ($news as $item) { ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 wrap-news">
                        <h2 class="news-item-title"><?= $item['name']?></h2>
                        <p class="news-item-text"><?= $item['text']?></p>
                        <span class="news-item-date"><?= $item['date']?></span>
                    </div>
                    <?php } ?>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>