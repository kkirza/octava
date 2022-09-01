<?php
$jsonPOPUP = file_get_contents('req/timerPOPUP.json');
$jsonPOPUP_UNDECODE = json_decode($jsonPOPUP, TRUE);
?>
<div class="timerPOPUP_leaveArea" id="timerPOPUP_leaveArea"></div>
<section class="timerPOPUP" id="timerPOPUP">
    <div class="timerPOPUP__container">
        <div class="timerPOPUP-whiteArea" id="timerPOPUP-whiteArea"></div>
        <div class="timerPOPUP__content">
            <div style="background: url('req/timerPOPUP_IMG/<?php echo $jsonPOPUP_UNDECODE['img']; ?>'); background-size: cover; background-repeat: no-repeat; background-position: center center" class="timerPOPUP__contentLEFT">
                <div class="timerPOPUP__contentLEFT__headline Mont_Heavy_MA"><?php echo $jsonPOPUP_UNDECODE['headline']; ?></div>
            </div>
            <div class="timerPOPUP__contentRIGHT">
                <div class="timerPOPUP__contentRIGHT__container">
                    <div class="timerPOPUP__contentRIGHT__headline Mont_Heavy_MA"><?php echo $jsonPOPUP_UNDECODE['text']; ?></div>
                    <form class="sendFORM">
                        <input name=tel type="tel" class="phone-mask timerPOPUP__INPUT Mont_Heavy_MA Up-c_MA" required placeholder="Телефон">
                        <button class="timerPOPUP_accept Mont_Heavy_MA Up-c_MA" type="submit">Отправить заявку</button>
                        <div class="schoolOfMusic_MA__form-checkboxArea">
                            <input type="checkbox" class="checkbox-b_MA" id="popupTimer" required><label for="popupTimer" class="checkbox-b_MA_label Inter_semi_bold_MA">Я даю согласие на обработку персональных данных</label>
                        </div>
                    </form>
                    <button class="timerPOPUP_accept timerPOPUP_accept-mg Mont_Heavy_MA Up-c_MA" id="timerPOPUP_accept_CLOSE" type="submit">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout("document.getElementById('timerPOPUP').classList.add('display_block')", <?php echo $jsonPOPUP_UNDECODE['time']; ?>000);
    setTimeout("document.getElementById('timerPOPUP').classList.add('display_block')", <?php echo $jsonPOPUP_UNDECODE['time2']; ?>000);
    var leaveCatcher = 0;
    document.getElementById('timerPOPUP_leaveArea').onmouseover = function() {
        if (leaveCatcher == 0) {
            document.getElementById('timerPOPUP').classList.add('display_block');
            leaveCatcher = 1;
        }
    };
    document.getElementById('timerPOPUP-whiteArea').onclick = function() {
        document.getElementById('timerPOPUP').classList.remove('display_block');
    };
    document.getElementById('timerPOPUP_accept_CLOSE').onclick = function() {
        document.getElementById('timerPOPUP').classList.remove('display_block');
    };
</script>