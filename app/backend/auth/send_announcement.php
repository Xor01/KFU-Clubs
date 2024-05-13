<?php
require_once 'app/backend/core/Init.php';
if (!$user->isLoggedIn()){
    Redirect::to('index.php');
}

if (!$clubManagement->isUerIsAnAdmin($user->data()->uid)){
    Session::flash('unauthorized', 'You don not have permission to access that page.');
    Redirect::to('index.php');
}

$result = $clubManagement->getClubsAUserIsAdminTo($user->data()->uid);
if (!$result) {
    Redirect::to('index.php');
}


if (Input::get('title') && is_numeric(escape(Input::get('selected_club')))) {
    
    try {
        $result = $announcements->create(
            ['title'=> escape(Input::get('title')),
            'content'=> escape(Input::get('content')),
            'authorID'=> escape($user->data()->uid),
            'clubID'=> escape(Input::get('selected_club')),]
        );
    } catch (\Throwable $th) {
        Session::flash('danger', "An error has occurred, please contact support for more information.");
        Redirect::to('dashboard.php');
    }
        Session::flash('general', "Announce has been published.");
        Redirect::to('dashboard.php');
}