<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 2) {
    echo "Login error";
    exit;
}
if(strlen($username) < 2) 
    echo "Name error";
    else if (trim($username) == "")
    echo "So short name";
    else if ((trim($username) == "") || (trim($login) == "") || (trim($email) == "") ||  (trim($password) == ""))
    echo "We need all your information";

// if ($name == "")
//     echo "Такого имени нет";
//     else if ($name == "" 
    
if(strlen($email) < 4 && !str_contains($email, '@')) {
    echo "Email error";
    exit;
}
if(strlen($password) < 2) {
    echo "Password error";
    exit;
}

//DB 
require "db.php";

//Password
$salt = '234jkj38876khh';
$password = md5($salt . $password);

// INSERT
$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: /');
