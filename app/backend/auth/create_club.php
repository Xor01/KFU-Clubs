<?php

if (!$user->hasPermission('admin')) {
    Session::flash('unauthorized', 'You don not have permission to this page.');
    Redirect::to('index.php');
}

$club_name = Input::get('club_name');
$club_description = Input::get('club_description');
if ($club_name && $club_description) {
    $result = $clubs->create(['clubName'=> $club_name, 'description' => $club_description]);
    if ($result) {
        $res = $clubManagement->makeUserAdmin($user->data()->uid, $club_name);
        Session::flash('general', 'Club has been created.');
        Redirect::to('dashboard.php');
    }
    else{
        Session::flash('danger', 'Sorry the club was not created, contact with support.');
        Redirect::to('dashboard.php');

    }
}