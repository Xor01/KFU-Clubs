<?php
class Event
{
    private $_db,
            $_data,
            $_sessionName;

    public function __construct($events = null)
    {
        
        $this->_db = Database::getInstance();
        $this->findAll();
    }


    public function create($fields = array())
    {
        if (!$this->_db->insert('events', $fields))
        {
            return false;
        }
        return true;
    }

    public function findAll()
    {

            $data = $this->_db->query('Select * from events order by created_at desc');
            $this->_data = $data->results();
            if ($data)
            {
                return true;
            }
        
    }

    public function find($event_id)
    {

            $data = $this->_db->query('Select * from events where eventID=?', [$event_id]);
            $this->_data = $data->results();
            if ($data)
            {
                return true;
            }
        
    }

    public function update($fields = array(), $id = null)
    {
        if (!$id && $this->isLoggedIn())
        {
            $id = $this->data()->uid;
        }

        if (!$this->_db->update('events', $id, $fields))
        {
            throw new Exception('Unable to update the user.');
        }
    }

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function data()
    {
        return $this->_data;
    }

    public function checkIfUserIsRegisterInEvent($userId, $eventId){
        $data = $this->_db->query('SELECT userID FROM event_registrations WHERE userID = ? AND eventID = ?', [$userId, $eventId]); 
            if ($data->count() == 1)
            {
                return true;
            }
            return false;
    }


    public function getEventsApplications($userId)
    {

        $data = $this->_db->query(
            "SELECT clubs.clubID, users.uid, clubs.clubName, users.college, users.bio, users.joined, users.name, events.eventID, events.eventTitle, event_registrations.registration_datetime, event_registrations.registration_status  FROM clubMembers INNER JOIN users ON clubMembers.userID = users.uid INNER JOIN clubs ON clubs.clubID = clubMembers.clubID INNER JOIN event_registrations ON event_registrations.clubID = clubs.clubID INNER JOIN events ON event_registrations.eventID = events.eventID
            WHERE active = 1 AND clubMembers.clubID IN (SELECT clubID FROM clubMembers WHERE userID=? AND roleID=1)", [$userId]);
        if ($data->count())
        {
            $this->_data = $data->results();
            return true;
        }
        return false;
    }

    public function getRegistrationStatus($userId, $eventId){
        $data = $this->_db->query('SELECT registration_status FROM event_registrations WHERE userID = ? AND eventID = ?', [$userId, $eventId]); 
            if ($data->count() == 1)
            {

                return $data->results();
            }
            return [''];
    }


    public function acceptUser($userId, $eventId){
        $result = $this->_db->query("UPDATE event_registrations SET registration_status = 'accepted' WHERE userID=? and eventID=?", [$userId, $eventId]);
        return $result;
    }


    public function rejectUser($userId, $eventId){
        $result = $this->_db->query("UPDATE event_registrations SET registration_status = 'rejected' WHERE userID=? and eventID=?", [$userId, $eventId]);
        return $result;
    }

    public function sendRegistration($clubId, $userId, $eventId){
        $result = $this->_db->query("INSERT INTO event_registrations (clubID, eventID, userID) VALUES (?, ?, ?)", [$clubId,$eventId, $userId]);
        return $result;
    }

}
