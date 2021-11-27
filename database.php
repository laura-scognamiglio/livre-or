<?php
session_start();
$bdd = mysqli_connect("localhost","root","root","livreor");
$queryUser = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$user = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');

$queryCom = mysqli_query($bdd, "SELECT * FROM `commentaires`" );
$com = mysqli_fetch_all($queryCom, MYSQLI_ASSOC);


$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));
$passwordconfirm = htmlspecialchars(trim($_POST['passwordconfirm']));
$mssg = "";
