<?php
const SERVER = 'localhost';
const BDD = 'sae203';
const USER = 'root';
const PASSWORD = '';


$pdo = new PDO('mysql:host=' . SERVER . ';dbname=' . BDD . ';charset=utf8', USER, PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);