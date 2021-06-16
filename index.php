<?

// Подключаем страницу "Главная"
if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'][2] == "t") {
    $title = "Главная страница";
    $header = "Добро пожаловать";
    require_once 'header.php';
    ?>
    <div class="container main-section bg-white">
        <h2><?=$header;?></h2>
        <? require_once 'inc/pages/main.php'; ?>
    </div>
    <?
    // Подключаем подвал
    require_once 'footer.php';
}


// Подключаем страницу "Об отеле"
if ($_SERVER['REQUEST_URI'] == "/about") {
    $title = "Об Отеле";
    $header = $title;
    require_once 'header.php';
    ?>
    <div class="container main-section bg-white">
        <h2><?=$header;?></h2>
        <? require_once 'inc/pages/about.php'; ?>
    </div>
    <?
    // Подключаем подвал
    require_once 'footer.php';
}


// Подключаем страницу "Номера"
if ($_SERVER['REQUEST_URI'] == "/rooms") {
    $title = "Номера";
    $header = $title;
    require_once 'header.php';
    ?>
    <div class="container main-section bg-white">
        <h2><?=$header;?></h2>
        <? require_once 'inc/pages/rooms.php'; ?>
    </div>
    <?
    // Подключаем подвал
    require_once 'footer.php';
}


// Подключаем страницу "Контакты"
if ($_SERVER['REQUEST_URI'] == "/contacts") {
    $title = "Контакты";
    $header = $title;
    require_once 'header.php';
    ?>
    <div class="container main-section bg-white">
        <h2><?=$header;?></h2>
        <? require_once 'inc/pages/contacts.php'; ?>
    </div>
    <?
    // Подключаем подвал
    require_once 'footer.php';
}


// Подключаем страницу "Гостевая книга"
if ($_SERVER['REQUEST_URI'] == "/reviews") {
    $title = "Гостевая книга";
    $header = $title;
    require_once 'header.php';
    ?>
    <div class="container main-section bg-white">
        <h2><?=$header;?></h2>
        <? require_once 'inc/pages/reviews.php'; ?>
    </div>
    <?
    // Подключаем подвал
    require_once 'footer.php';
}

// Подключаем страницу "Панель администратора"
if ($_SERVER['REQUEST_URI'] == "/admin/") {
    // Подключаем панель
    require_once 'admin/panel.php';
    //  Подключаем подвал
    require_once 'footer.php';
}

// Подключаем страницу "Удаление отзыва"
if ($_SERVER['REQUEST_URI'][7] == "h") { require_once 'admin/handler.php'; }