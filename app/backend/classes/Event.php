<?php
class Event
{
    private $_db,
            $_data,
            $_sessionName;

    public function __construct($events = null)
    {
        
        $this->_db = Database::getInstance();
        $this->findAll($events);
    }


    public function create($fields = array())
    {
        if (!$this->_db->insert('events', $fields))
        {
            return false;
        }
        return true;
    }

    public function findAll($announcement)
    {

            $data = $this->_db->query('Select * from events order by created_at desc');
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

}
