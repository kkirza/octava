<?php
//Array ( [name] => Kirill [phone] => +79131313131 [email] => 321312312@mail.ru [message] => Massege )
   /* print_r($_POST);
    $error = '';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pos = strpos($email, '@');
    $mess = $_POST['message'];

    if (trim($name) === '') {
        $error = 'Заполните поле Имя';
        echo $error . '<br>';
    }
    else if (trim($phone) === '') {
        $error = 'Заполните поле Телефон';
        echo $error . '<br>';
    }
    else if (trim($email) === '') {
        $error = 'Заполните поле E-mail';
        echo $error . '<br>';
    }
    else if (trim($mess) === '') {
        $error = 'Заполните поле Сообщение';
        echo $error . '<br>';
    }
    else if (!$pos) {
        $error = "В поле E-mail не правильно записан адрес электронной почты" ;
        echo $error . '</br>';
    }*/
    $to = "zasuhink2015@mail.ru"; // емайл получателя данных из формы
    $tema = "Форма обратной связи на сайте S2S Design"; // тема полученного емайла
    $message = "Имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
    $message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
    $message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
    $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    mail($to, $tema, 'test', $headers); //отправляет получателю на емайл значения переменных
    print_r($_REQUEST);
?>