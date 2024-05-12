<?php
require_once 'app/backend/core/Init.php';
if (!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if (!$clubManagement->isUerIsAnAdmin($user->data()->uid)){
    Session::flash('unauthorized', 'You don not have permission to access that page.');
    Redirect::to('index.php');
}

$result = $clubManagement->getClubApplications($clubManagement->data()[0]->clubID);


// TODO: check if the admin is the same club admin

if (Input::get('userId') && Input::get('clubId') && !$clubManagement->isUserActive(escape(Input::get('clubId')), escape(Input::get('userId')))) {
    if (Input::get('status') == 'accept') {
        $result = $clubManagement->acceptUser(escape(Input::get('clubId')), escape(Input::get('userId')));
        Redirect::to('dashboard.php');
    }
    elseif (Input::get('status') == 'reject'){
        $result = $clubManagement->rejectUser(escape(Input::get('clubId')), escape(Input::get('userId')));
        var_dump($result);
        Redirect::to('dashboard.php');
    }
    
}