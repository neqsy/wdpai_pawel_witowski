<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/login");
    exit();
}
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/events.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/029cd684fc.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>EVENTS</title>
</head>
<body>
    <div class="base-container">
        <nav>
            <ul>
                <li>
                    <i class="fas fa-calendar-week"></i>
                    <a href="events" class="button">events</a>
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <a href="#" class="button">people</a>
                </li>
                <li>
                    <i class="fas fa-comment-alt"></i>
                    <a href="#" class="button">messages</a>
                </li>
                <li>
                    <i class="fas fa-bell"></i>
                    <a href="#" class="button">notifications</a>
                </li>
                <li>
                    <i class="fas fa-cog"></i>
                    <a href="#" class="button">settings</a>
                </li>
            </ul>
            <img src="public/img/logo.svg">
            <form class="logout" action="logout" method="POST">
                <button type="submit">Logout</button>
            </form>

        </nav>
        <main>
            <header class="search">
                <div class="search-bar">
                    <input placeholder="search event">
                </div>
                <div class="add-event">
                    <i class="fas fa-plus"></i>
                    <a href="addEvent">ADD</a>
                </div>
                <div class="order-mass">
                    <i class="fab fa-cc-mastercard"></i>
                    <a href="addOrder">ORDER MASS</a>
                </div>
            </header>

            <section class="events">
                <?php foreach ($events as $event):?>
                    <div id = "event-1">
                        <img src="public/uploads/<?= $event->getImage() ?>">
                        <div>
                            <h2><?= $event->getTitle();?></h2>
                            <p><?= $event->getDescription();?></p>
                            <div>
                                <i class="author">John Snow</i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </section>
        </main>
    </div>
</body>
<template id="event-template">
    <div id = "event-1">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div>
                <i class="author">John Snow</i>
            </div>
        </div>
    </div>
</template>
