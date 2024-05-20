<?php

Class ClubsManagement {
    private $_db,
            $_data,
            $_clubMembers;

    public function __construct($clubs = null)
    {
        $this->_db = Database::getInstance();

    }

    public function update($fields = array(), $id = null)
    {

        if (!$this->_db->update('clubs', $id, $fields))
        {
            throw new Exception('Unable to update the user.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('clubs', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function isUserInClub($clubId, $userId)
    {
        if ($clubId && $userId)
        {
            $field  = (is_numeric($clubId)) ? 'clubID' : 'clubName';

            $data = $this->_db->query("select * from clubMembers where clubID = ? and userID = ?", [$clubId, $userId]);
            if ($data->count())
            {
                $this->_data = $data->results();
                return true;
            }
        }
        return false;
    }


    public function isUserActive($clubId, $userId)
    {
        if ($clubId && $userId)
        {
            $field  = (is_numeric($clubId)) ? 'clubID' : 'clubName';

            $data = $this->_db->query("select * from clubMembers where clubID = ? and userID = ? and active = 1", [$clubId, $userId]);
            if ($data->count())
            {
                $this->_data = $data->results();
                return true;
            }
        }
        return false;
    }

    public function findAll($clubs = null)
    {
        $data = $this->_db->query('Select * from clubs');
        $this->_data = $data->results();
        if ($data)
        {
            return true;
        }
    }


    public function findAllInClub($clubId)
    {
        $data = $this->_db->query('SELECT * FROM clubMembers INNER JOIN users ON clubMembers.userID = users.uid INNER JOIN clubs ON clubs.clubID = clubMembers.clubID INNER JOIN roles ON roles.roleID = clubMembers.roleID WHERE clubMembers.clubID = ? AND clubMembers.active=1', [$clubId]);
        $this->_data = $data->results();
        if ($data)
        {
            return true;
        }
    }


    public function getClubName($clubId)
    {
        $data = $this->_db->query('Select clubName from clubs where clubID = ?', [$clubId]);
        $this->_data = $data->results();
        if ($data)
        {
            return $this->_data;
        }
        return null;
    }

    public function getLatestClubId($clubName)
    {
        $data = $this->_db->query('Select clubID from clubs where clubName = ?  order by clubID desc limit 1', [$clubName]);
        $this->_data = $data->results();
        if ($data)
        {
            return $this->_data;
        }
        return null;
    }

    public function addUserToClubMembers($fields = null)
    {
        if (!$this->_db->insert('clubMembers', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function isUerIsAnAdmin($userId)
    {

        $data = $this->_db->query("select * from clubMembers where roleID = 1 and userID = ?", [$userId]);
        if ($data->count())
        {
            $this->_data = $data->results();
            return true;
        }
        return false;
    }

    public function isUserIsAnAdminToThisClub($userId, $clubId)
{
    $data = $this->_db->query("SELECT userID FROM clubMembers WHERE roleID = 1 AND userID = ? AND clubID = ?", [$userId, $clubId]);
    // Check if any rows were returned
    if ($data->count() > 0)
    {
        return true;
    }
    return false;
}


    public function getClubsAUserIsAdminTo($userId)
    {

        $data = $this->_db->query("select * from clubMembers Inner join clubs on clubMembers.clubID = clubs.clubID where roleID = 1 and userID = ?", [$userId]);
        if ($data->count())
        {
            $this->_data = $data->results();
            return true;
        }
        return false;
    }


    public function getClubApplications($userId)
    {

        $data = $this->_db->query(
            "SELECT clubs.clubID, users.uid, clubs.clubName, users.college, users.bio, users.joined, users.name  FROM clubMembers INNER JOIN users ON clubMembers.userID = users.uid INNER JOIN clubs ON clubs.clubID = clubMembers.clubID  
            WHERE active = 0 AND clubMembers.clubID IN (SELECT clubID FROM clubMembers WHERE userID=? AND roleID=1)", [$userId]);
        if ($data->count())
        {
            $this->_data = $data->results();
            return true;
        }
        return false;
    }


    public function acceptUser($clubId, $userId)
    {

        $result = $this->_db->query("UPDATE clubMembers SET active = 1 WHERE clubID=? and userID=?", [$clubId, $userId]);
        return $result;
    }

    public function rejectUser($clubId, $userId)
    {

        $data = $this->_db->query("Delete from clubMembers where clubID=? and userID=?", [$clubId, $userId]);
        if ($data)
        {
            return $this->_data = $data->first();
        }
        return false;
    }

    public function makeUserAdmin($userId, $clubName)
    {
        $clubId = $this->getLatestClubId($clubName)[0]->clubID;
        $result = $this->addUserToClubMembers([
            'clubID' => $clubId,
            'userID' => $userId,
            'roleID' => 1,
            'active' => 1,
        ]);
        return true;
    }


    public function changePermission($roleID, $userID, $clubID){
        $result = $this->_db->query("UPDATE clubMembers SET roleID = ? WHERE clubID=? and userID=? ", [$roleID, $clubID, $userID]);
        return !($result == null);
    }


    public function checkTimeConflict($userID, $newEventStart, $newEventEnd, $thisEventId) {
        $result = $this->_db->query(
            "SELECT 1
             FROM event_registrations er 
             JOIN events e ON er.eventID = e.eventID
             WHERE er.userID = ? 
             AND (
                 (? BETWEEN e.start_datetime AND e.end_datetime) 
                 OR 
                 (? BETWEEN e.start_datetime AND e.end_datetime) 
                 OR 
                 (e.start_datetime BETWEEN ? AND ?) 
                 OR 
                 (e.end_datetime BETWEEN ? AND ?)
             )
             AND e.eventID != ? AND registration_status NOT IN ('rejected', 'withdraw')" 
             ,
            [
                $userID, 
                $newEventStart, 
                $newEventEnd, 
                $newEventStart, 
                $newEventEnd, 
                $newEventStart, 
                $newEventEnd,
                $thisEventId
            ]
        );
        return $result->count();
    }


    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function data()
    {
        return $this->_data;
    }
}