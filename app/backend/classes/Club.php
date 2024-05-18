<?php

class Club
{
    private $_db,
            $_data;

    public function __construct($clubs = null)
    {
        $this->_db = Database::getInstance();

       $this->findAll($clubs);
    }

    public function update($fields = array(), $id = null)
    {
        if (!$id && $this->isLoggedIn())
        {
            $id = $this->data()->uid;
        }

        if (!$this->_db->update('clubs', $id, $fields))
        {
            throw new Exception('Unable to update the club.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('clubs', $fields))
        {
            return false;
        }
        return true;
    }

    public function find($club = null)
    {
        if ($club)
        {
            $field  = (is_numeric($club)) ? 'clubID' : 'clubName';

            $data = $this->_db->get('clubs', array($field, '=', $club));

            if ($data->count())
            {
                $this->_data = $data->first();
                return true;
            }
        }
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
