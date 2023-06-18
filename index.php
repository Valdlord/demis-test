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
	<title>Главная страница</title>
	<meta name="description" content="Landing description">
	<meta name="keywords" content="meta, meta теги, seo">
<!--	<meta name="robots" content="noindex, nofollow">-->
	<meta property="og:title" content="Test">
	<meta name="twitter:title" content="Test">
	<link href="style/landing-page.css" rel="stylesheet" type="text/css">
	<script defer src="js/action.js"></script>
</head>
<body>
	<div class="page-wrapper">
		<header class="header">
			<div class="container">
				<h1 class="first-title title-line">Главная страница</h1>
			</div>
		</header>
		<main class="landing-page-content">
			<section class="section-1">
				<div class="container">
                    <h2 class="second-title title-line">Последние новости</h2>
                    <div class="news-wrap">
                        <?php
                        require_once "db.php";
                        $showNews = $db->query("
                                        SELECT name, preview, date
                                        FROM news
                                        ORDER BY date DESC
                                        LIMIT 3
                                        ");

                        $news = $showNews->fetchAll();
                        foreach ($news as $item) { ?>

                            <div class="news-item">
                                <h2 class="news-item__title"><?= $item['name']?></h2>
                                <p class="news-item__text"><?= $item['preview']?></p>
                                <span class="news-item__date"><?= $item['date']?></span>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="news.php" class="link-item">Все новости</a>
                    <a href="feedback.php" class="link-item">Обратная связь</a>
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
</body>
</html>