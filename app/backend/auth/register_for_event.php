<?php

require_once "app/backend/core/Init.php";


if (!$user->isLoggedIn()){
    Session::flash('general', 'To Register for the this event you need to log in.');
    Redirect::to('login.php');
}


$event_id = Input::get('eventId');
$user_id = Input::get('userId');
$club_id = Input::get('clubId');

if (Input::get('action') == 'register') {
    if ($events->find($event_id)){
        if (!$clubManagement->isUserActive($club_id, $user_id)){
            Session::flash('general', 'Only Members can register in this event.');
            Redirect::to('events.php');
        }

        $event_info = $events->find($event_id);
         $conflict_result = ($clubManagement->checkTimeConflict($user_id, escape($events->data()[0]->start_datetime), escape($events->data()[0]->end_datetime), $event_id));
        if ($conflict_result) {
            Session::flash('unauthorized', 'Sorry their is a conflict with other event registration you cannot register to this event');
            Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
        }
        $result = $events->getRegistrationStatus($user_id, $event_id);
        if (!$result[0]) {
            $result = $events->sendRegistration($club_id, $user_id, $event_id);
            if ($result) {
                Session::flash('general', 'Thank you have successfully registered to this event, please check later to see if you have been accepted.');
                Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
            }
        }
        else{
            Session::flash('general', 'You have already registered to attend this event, Your attendance status is: ' . $result[0]->registration_status);
            Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
        }
        
    }
    else{
        Session::flash('general', 'Sorry We could not find this event information.');
        Redirect::to('events.php');
    }
    
}
else if (Input::get('action') == 'comment'){
    if (!$clubManagement->isUserActive($club_id, $user_id)){
        Session::flash('general', 'Only Members can register in this event.');
        Redirect::to('events.php');
    }
    
    $result = $events->getRegistrationStatus($user_id, $event_id);
    if ($result[0] && ($result[0]->registration_status== 'accepted')) {
        $comments->create(
            [
                "eventID" => $event_id,
                "userID" => $user_id,
                "comment" => escape(Input::get('comment')),
 
            ]
        );
        Session::flash('general', 'Successfully published a comment');
        Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
    }
    else{
        Session::flash('danger', 'Only accepted members for this event can comment on this event, your registration: ' . $result[0]->registration_status);
        Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
    }
}

else if (Input::get('action') == 'like') {
    $comments->toggleLikes(escape(Input::get('commentId')), $user->data()->uid);
    Redirect::to("view_event.php?userId=$user_id&eventId=$event_id&clubId=$club_id");
}