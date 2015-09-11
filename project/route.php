<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

// ********* INDEX ********* // 

$app->get('/', function(){
  include 'index.php';
}); 

// ********* LOGIN ********* // 

$app->get('/login', function(){
  include 'login.php';
});


// ********* ABOUT ********* // 

$app->get('/about', function(){
  include 'about.php';
});


$app->run();