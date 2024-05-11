<?php
class Announcement
{
    private $_db,
            $_data,
            $_sessionName;

    public function __construct($announcement = null)
    {
        
        $this->_db = Database::getInstance();
        $this->find($announcement);
    }


    public function create($fields = array())
    {
        if (!$this->_db->insert('announcements', $fields))
        {
            throw new Exception("Unable to create the announcement.");
        }
    }

    public function find($announcement)
    {

            $data = $this->_db->query('Select * from announcements');
            $this->_data = $data->results();
            if ($data)
            {
                
                return true;
            }
        
    }

    // TODO: Adjust the authentication
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

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function data()
    {
        return $this->_data;
    }

}
