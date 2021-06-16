<?

if(isset($_POST['done']) && !empty($_POST['name'])){
    $name = $_POST['name'];
    $text = $_POST['text'];
    $db->query("INSERT INTO `reviews` (`name`, `text`, `date`) VALUES ('".$name."', '".$text."', '".date('d/m/Y')."')");
}
?>

<section class="reviews">
 
    <a class="btn-main" data-fancybox data-animation-duration="700" data-src="#formreviews" href="javascript:;">Оставить отзыв</a>


    <div style="display: none;" id="formreviews" class="animated-modal">
        <form class="main-form" method="POST">
            <label>
                <span>Ваше имя:</span>
                <input type="text" name="name" id="nameReviews" class="form-control" required>
            </label>
            <label>
                <span>Ваш отзыв об отеле:</span>
                <textarea class="form-control" name="text" id="textReviews" cols="30" rows="10" required></textarea>
            </label>
            <input type="submit" class="btn-main" id="reviewsDone" name="done">
        </form>
    </div>
        
    <div class="reviews-list">
        <?
            $result = $db->query("SELECT * FROM `reviews`");
            foreach ($result as $row) {
                ?>
                 <div class="reviews-item">
                    <div class="block">
                        <p class="title"><?=$row['name']?> <span><?=$row['date']?></span></p>
                        <p class="text"><?=$row['text']?></p>
                    </div>
                </div>
                <?
            }
        ?>
        
    </div>
</section>