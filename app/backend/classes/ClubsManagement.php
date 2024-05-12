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
        if (!$id && $this->isLoggedIn())
        {
            $id = $this->data()->uid;
        }

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
            $field  = (is_numeric($clubId)) ? 'clubID' : 'name';

            $data = $this->_db->query("select * from clubMembers where clubID = ? and userID = ?", [$clubId, $userId]);
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

    public function addUserToClubMembers($fields = null)
    {
        if (!$this->_db->insert('clubMembers', $fields))
        {
            throw new Exception("Unable to create the user.");
        }
    }

    public function hasPermission($key)
    {
        $group = $this->_db->get('groups', array('gid', '=', $this->data()->groups));

        if  ($group->count())
        {
            $permissions = json_decode($group->first()->permissions, true);

            if ($permissions[$key] == true)
            {
                return true;
            }
        }

        return false;
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