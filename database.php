<?php
session_start();
$bdd = mysqli_connect("localhost","root","root","livreor");
$queryUser = mysqli_query($bdd, "SELECT * FROM `utilisateurs`");
$user = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);
mysqli_set_charset($bdd, 'utf8');