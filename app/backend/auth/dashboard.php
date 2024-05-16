<?php
require_once 'app/backend/core/Init.php';
if (!$user->isLoggedIn()){
    Session::flash('unauthorized', 'You don not have permission to access that page.');
    Redirect::to('index.php');
}

if (!$clubManagement->isUerIsAnAdmin($user->data()->uid)){
    Session::flash('unauthorized', 'You don not have permission to access that page.');
    Redirect::to('index.php');
}

