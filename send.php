<?php


// $contact_us_user_name = $_POST['contact_us_user_name'];
// $contact_us_tel = $_POST['contact_us_tel'];
// $contact_us_select = $_POST['contact_us_select'];

// $contact_us_user_name = htmlspecialchars($contact_us_user_name);
// $contact_us_tel = htmlspecialchars($contact_us_tel);
// $contact_us_select = htmlspecialchars($contact_us_select);

// $contact_us_user_name = urldecode($contact_us_user_name);
// $contact_us_tel = urldecode($contact_us_tel);
// $contact_us_select = urldecode($contact_us_select);

// $contact_us_user_name = trim($contact_us_user_name);
// $contact_us_tel = trim($contact_us_tel);
// $contact_us_select = trim($contact_us_select);
$msg = '';
$msg .= $_REQUEST['name'] ? "Имя ученика: $_REQUEST[name] \n" : '';
$msg .= $_REQUEST['tel'] ? "Телефон ученика: $_REQUEST[tel] \n" : '';
$msg .= $_REQUEST['subj'] ? "Дополнительное сообщение: $_REQUEST[subj] \n" : '';
$msg .= $_REQUEST['mail'] ? "Почта ученика: $_REQUEST[mail] \n" : '';

$from = "info@oktavamusic.ru ";
$to = "novosibirsk@rockss.ru";
$subj = 'Заявка с Октавы';


function _mail ($from, $to, $subj, $what)
{
    mail($to, $subj, $what,
        "Mime-Version: 1.0\n".
        "Date: ".date('r')."\n".
        "From: $from\n".
        "Reply-To: $from\n".
        "Content-Type: text/plain; charset=UTF-8\n".
        "Content-Transfer-Encoding: 8bit"
    );
}
_mail ($from, $to, $subj,$msg);

print_r($_REQUEST);
print_r($msg);

?>