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


if (Input::get('event_title') && is_numeric(escape(Input::get('selected_club')))) {
    



$current_datetime = date("Y-m-d\TH:i:s");
$start_datetime = date("Y-m-d\TH:i:s", strtotime(escape(Input::get('start_datetime'))));
$end_datetime = date("Y-m-d\TH:i:s", strtotime(escape(Input::get('end_datetime'))));

if ($start_datetime < $current_datetime || $end_datetime < $current_datetime) {
    Session::flash('danger', "Have you invent a time machine ?");
    Redirect::to('create_event.php');
}


if ($end_datetime < $start_datetime) {
        Session::flash('danger', "End Date time should be after start datetime");
        Redirect::to('create_event.php');
}

    try {
        $result = $events->create(
            ['eventTitle'=> escape(Input::get('event_title')),
            'description'=> escape(Input::get('event_description')),
            'start_datetime'=> date("Y-m-d\TH:i:s", strtotime(escape(Input::get('start_datetime')))),
            'end_datetime'=> date("Y-m-d\TH:i:s", strtotime(escape(Input::get('end_datetime')))),
            'location'=> escape(Input::get('event_location')),
            'clubID'=> escape(Input::get('selected_club')),
            'created_by'=> escape($user->data()->uid)]
        );
    } catch (\Throwable $th) {
        var_dump($th);
        Session::flash('danger', "An error has occurred, please contact support for more information.");
        Redirect::to('dashboard.php');
    }
        Session::flash('general', "Event has been published.");
        Redirect::to('dashboard.php');
}
