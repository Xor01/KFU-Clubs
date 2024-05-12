<?php

require_once "app/backend/core/Init.php";

if (!$user->isLoggedIn()){
    Redirect::to('login.php');
}

if (isset($_GET['club'])) {
    $clubs->find($_GET['club']);
    $result = $clubManagement->isUerIsAnAdmin($user->data()->uid);
    
    
    $clubManagement->isUserInClub($clubs->data()->clubID, $user->data()->uid);
    if (isset($clubManagement->data()[0])) {
        if ($clubManagement->data()[0]->active == true){
            Session::flash('general', 'You are already a member in this club.');
            Redirect::to('clubs.php');
        }
        else{
            Session::flash('general', 'Please wait we club manager to review your information to be accepted');
            Redirect::to('clubs.php');
        }
    }
    else{
        $clubManagement->addUserToClubMembers([
            'clubID' => $clubs->data()->clubID,
            'userID' => $user->data()->uid,
            'roleID' => 2,
            'active' => 0,
        ]);
        Session::flash('general', 'A request has been made to join, please wait acceptance.');
        Redirect::to('clubs.php');
    }
}