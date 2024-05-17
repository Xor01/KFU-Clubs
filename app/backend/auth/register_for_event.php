<?php

require_once "app/backend/core/Init.php";


if (!$user->isLoggedIn()){
    Session::flash('general', 'To Register for the this event you need to log in.');
    Redirect::to('login.php');
}


$event_id = Input::get('event_id');
$user_id = Input::get('user_id');
$club_id = Input::get('club_id');

if (Input::get('action')) {
    if ($events->find($event_id)){
        
        if (!$clubManagement->isUserInClub($clubId, $userId)){
            Session::flash('general', 'Only Members can register in this event.');
            Redirect::to('view_event.php');
        }
        
        $result = $events->getRegistrationStatus($user_id, $event_id);
        
        if ($result) {
            Session::flash('general', 'You have already registered to attend this event, Your attendance status is: ');
            Redirect::to("view_event.php?userId=$user_id&event_id=$event_id");
        }

        $result = $events->sendRegistration($club_id, $user_id, $event_id);
        if ($result) {
            Session::flash('general', 'Thank you have successfully registered to this event, please check later to see if you have been accepted.');
            Redirect::to('view_event.php?userId=$user_id&event_id=$event_id');
        }
    }
    else{
        Session::flash('general', 'Sorry We could not find this event information.');
        Redirect::to('events.php');
    }
    
}