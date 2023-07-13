<?php
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];

$emailValidate = '#^[a-z0-9]{1,15}@(?:mail\.ru|gmail\.com)$#';

if (preg_match($emailValidate, $email)) {
    echo '<br>';
    echo 'Валидация почты прошла';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Валидация почты не прошла';
    echo '<br>';
}

echo '<br>';

$passworsValidate = '#^[a-zA-Z0-9$]{6,}$#';

if (preg_match($passworsValidate, $password)) {
    echo '<br>';
    echo 'Валидация пароля прошла';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Валидация пароля не прошла';
    echo '<br>';
}

echo '<br>';

$dateValidate = '#^(?:\d{4})-(?:0[1-9]|1[0-2])-(?:0[1-9]|[1-2][0-9]|3[0-1])$#';

if (preg_match($dateValidate, $date)) {
    echo '<br>';
    echo 'Валидация даты прошла';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Валидация даты не прошла';
    echo '<br>';
}

// echo '<br>';

// $data = ['email' => preg_match($emailValidate, $email), 'password' => preg_match($passworsValidate, $password), 'date' => preg_match($dateValidate, $date)];
// switch ($data) {
//     case (!$data['email']):
//         echo '<br>';
//         echo 'Почта не валидна';
//         echo '<br>';
//         break;
//     case (!$data['password']):
//         echo '<br>';
//         echo 'Пароль не валидет';
//         echo '<br>';
//         break;
//     case (!$data['date']):
//         echo '<br>';
//         echo 'Дата не валидна';
//         echo '<br>';
//         break;
//     default:
//         echo '<br>';
//         echo 'Данные валидны';
//         echo '<br>';
// }
