<!doctype html><html lang="ru">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='image/x-icon' href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <title>Контроль попапа</title>
</head>
<body style="background: #F6F6F6">

<?php
$jsonPOPUP = file_get_contents('req/timerPOPUP.json');
$jsonPOPUP_UNDECODE = json_decode($jsonPOPUP, TRUE);
?>

<section class="controlTimerPopup">
<form action="req/timerPopupSEND.php" method="post" enctype="multipart/form-data">
    <div class="controlTimerPopup__inputName Up-c_MA Mont_Heavy_MA">Заголовок</div>
    <input type="text" name="timerPOPUP_headline" value="<?php echo $jsonPOPUP_UNDECODE['headline']; ?>" class="controlTimerPopup__input Inter_Regular_MA"><br>
    <div class="controlTimerPopup__inputName controlTimerPopup__inputName-mg Up-c_MA Mont_Heavy_MA">текст</div>
    <textarea name="timerPOPUP_text" class="controlTimerPopup__inputTextarea Inter_Regular_MA"><?php echo $jsonPOPUP_UNDECODE['text']; ?></textarea><br>
    <div class="controlTimerPopup__inputName controlTimerPopup__inputName-mg Up-c_MA Mont_Heavy_MA">Картинка</div>
    <input type="file" name="timerPOPUP_img" class="controlTimerPopup__input Inter_Regular_MA" value="<?php echo $jsonPOPUP_UNDECODE['img']; ?>" ><br>
    <div class="controlTimerPopup__inputName controlTimerPopup__inputName-mg Up-c_MA Mont_Heavy_MA">Время первого появления</div>
    <input type="number" name="timerPOPUP_time" class="controlTimerPopup__input Inter_Regular_MA" value="<?php echo $jsonPOPUP_UNDECODE['time']; ?>" ><br>
    <div class="controlTimerPopup__inputName controlTimerPopup__inputName-mg Up-c_MA Mont_Heavy_MA">Время второго появления</div>
    <input type="number" name="timerPOPUP_time2" class="controlTimerPopup__input Inter_Regular_MA" value="<?php echo $jsonPOPUP_UNDECODE['time2']; ?>" ><br>
    <button type="submit" class="controlTimerPopup_button Up-c_MA Mont_Heavy_MA">ОТПРАВИТЬ</button>
</form>
</section>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>

