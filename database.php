<?php
session_start();
$bdd = mysqli_connect("localhost","root","root","livreor");
$queryUser = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$user = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');

$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));
$passwordconfirm = htmlspecialchars(trim($_POST['passwordconfirm']));
$mssg = "";
