<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) --> 
<meta http-equiv='refresh' content='5; url=http://santino-test.ru'> 
<meta charset="UTF-8" />
<body>
	<h2>Сообщение успешно отправлено</h2>
</body>
<?php
	$to = "madesisudaidi@gmail.com"; // емайл получателя данных из формы
	$tema = "Форма обратной связи с сайта http://santino-test.ru"; // тема полученного емайла
	$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
	$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	$message .= "Номер телефона: ".$_POST['tell']."<br>"; //полученное из формы name=phone
	$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
	mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>