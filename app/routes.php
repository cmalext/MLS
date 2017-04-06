<?php


Route::controller('/mls', 'AdminController');
Route::controller('/', 'HomeController');

App::missing(function($exception){
  return \Redirect::to(\Config::get('config.base_url'));
});