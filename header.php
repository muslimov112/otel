<? 
require_once "inc/db.php";
if(isset($_POST['doneRooms']) && !empty($_POST['name'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $rooms = $_POST['rooms'];
    $datazaezda = $_POST['datazaezda'];
    $timezaezda = $_POST['timezaezda'];
    $dataviezda = $_POST['dataviezda'];
    $timeviezda = $_POST['timeviezda'];
    
    if(empty($_POST['dop'])) $dop = ""; else $dop = $_POST['dop'];

    $res = $db->query("INSERT INTO `rooms` 
                (`name`, `phone`, `rooms`, `datazaezda`, `timezaezda`, `dataviezda`, `timeviezda`, `dop`) 
                VALUES 
                ('".$name."', '".$phone."', '".$rooms."', '".$datazaezda."', '".$timezaezda."', '".$dataviezda."', '".$timeviezda."', '".$dop."') ");
    
    
    if($res) header('Location: /?text=Вы успешно забронировали номер в нашем отеле!');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>

    <!-- Fancybox 3 css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Yeseva+One&display=swap" rel="stylesheet">
    
    <!-- My Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
</head>
<body>
<?
if(isset($_GET['text'])){
    ?>
        <p class="success-message">
            <?=$_GET['text'];?>
        </p>
    <?
}
?>
<header>
    <nav class="navbar">
        <div class="container">
            <a data-fancybox data-animation-duration="700" data-src="#bookingRoom" href="javascript:;" class="btn">Забронировать</a>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about">Об отеле</a></li>
                <li><a href="/rooms">Номера</a></li>
                <li><a href="/contacts">Контакты</a></li>
                <li><a href="/reviews">Гостевая книга</a></li>
            </ul>
            <a href="tel:+79285671443" class="btn phone">+7 (928) 567-14-43</a>
            <a href="#" class="btn burger" style="display: none;">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </a>
        </div>
    </nav>
    <div class="text-info">
        <div class="container">
            <h1>PRESIDENT</h1>
            <div class="under-header">
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            <h3>HOTEL & RESTRAUNT</h3>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            <svg viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0L18.3677 10.3647H29.2658L20.4491 16.7705L23.8168 27.1353L15 20.7295L6.18322 27.1353L9.55093 16.7705L0.734152 10.3647H11.6323L15 0Z" fill="white"/>
            </svg>
            </div>
        </div>
    </div>
</header>

<div style="display: none;" id="bookingRoom" class="animated-modal">
    <form class="main-form" method="POST">
        <label>
            <span>Фамилия и Имя:</span>
            <input type="text" name="name" class="form-control" required>
        </label>

        <label>
            <span>Телефон:</span>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </label>

        <label>
            <span>Выберите номер:</span>
            <select name="rooms" class="form-control" required>
                <option value="Стандарт" selected>Стандарт</option>
                <option value="Стандарт с раскидным диваном">Стандарт с раскидным диваном</option>
                <option value="Стандарт улучшенный">Стандарт улучшенный</option>
                <option value="Стандарт с балконом">Стандарт с балконом</option>
                <option value="Стандарт 2-х местный">Стандарт 2-х местный</option>
                <option value="Стандарт 2-х комнатный">Стандарт 2-х комнатный</option>
                <option value="Стандарт улучшенный 2-х комнатный">Стандарт улучшенный 2-х комнатный</option>
            </select>
        </label>

        <div class="row roomsrow">
            <label>
                <span>Дата заезда:</span>
                <input type="date" name="datazaezda" value="<?=date('Y-m-d');?>" class="form-control" required>
            </label>

            <label>
                <span>Время заезда:</span>
                <input type="time" name="timezaezda" value="<?=date('H:i');?>" class="form-control" required>
            </label>
        </div>

        <div class="row roomsrow">
            <label>
                <span>Дата выезда:</span>
                <input type="date" name="dataviezda" class="form-control" required>
            </label>

            <label>
                <span>Время выезда:</span>
                <input type="time" name="timeviezda" class="form-control" required>
            </label>
        </div>

        <label>
            <span>Дополнительно:</span>
            <textarea class="form-control" name="dop" cols="30" rows="3"></textarea>
        </label>

        <input type="submit" class="btn-main" id="reviewsDone" name="doneRooms">
        <br>
        <p>Нажимая кнопку "Отправить" Вы даёте согласие на обработку введённой персональной информации в соответствии с Федеральным законом №ФЗ-152 от 27.07.2006г. "О персональных данных"</p>
    </form>
</div>

