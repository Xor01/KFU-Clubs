<?php

require_once "app/backend/core/Init.php";

if (!$user->isLoggedIn()){
    Session::flash('general', 'To Register for the this event you need to log in.');
    Redirect::to('login.php');
}

if (Input::get('userId') && Input::get('eventId')) {
    echo "hello world";
}