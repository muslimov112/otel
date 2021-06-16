<? require_once 'inc/db.php'; ?>
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
    

<header style="background: none !important;">
    <nav class="navbar">
        <div class="container">
            <!-- <a data-fancybox data-animation-duration="700" data-src="#bookingRoom" href="javascript:;" class="btn">Забронировать</a> -->
            <a href="/" style="color: #fff;">Главная</a>
 
        </div>
    </nav>
</header>

<div class="container main-section bg-white">
    <h2 style="text-align: left">Забронированные номера</h2>
  
        
        <?
        
        $result = $db->query("SELECT * FROM `rooms`");
        foreach ($result as $row) {
            ?>
            <table class="admin-rooms">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Фамилия и Имя</th>
                        <th>Телефон</th>
                        <th>Номер</th>
                    </tr>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['rooms']?></td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Дата заезда</th>
                        <th>Время заезда</th>
                        <th>Дата выезда</th>
                        <th>Время выезда</th>
                        
                    </tr>
                    <tr>
                        <td><?=$row['datazaezda']?></td>
                        <td><?=$row['timezaezda']?></td>
                        <td><?=$row['dataviezda']?></td>
                        <td><?=$row['timeviezda']?></td>  
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Доп. информация</th>
                    </tr>
                    <tr>
                        <td><?if($row['dop'] == "") echo "Доп. информация отсутствует"; else echo $row['dop'];?></td>   
                    </tr>
                </tfoot>
            </table>
            <?
        }
        ?>


    
    <h2 style="text-align: left">Отзывы</h2>    
    <table>
        <tr>
            <th>#</th>
            <th>Кто оставил отзыв</th>
            <th>Что написал</th>
            <th>Дата отзыва</th>
            <th>Удаление</th>
        </tr>
        <?
        
        $result = $db->query("SELECT * FROM `reviews` ORDER BY `id`");
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['text']?></td>
                <td><?=$row['date']?></td>
                <td><a href="handler.php/?id=<?=$row['id']?>" class="delete-btn">Удалить</a></td>
            </tr>
            <?
        }
        ?>
    </table>
</div>
</body>
</html>