<?php

class Comment
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

        if (!$this->_db->update('event_comments', $id, $fields))
        {
            throw new Exception('Unable to update the club.');
        }
    }

    public function create($fields = array())
    {
        if (!$this->_db->insert('event_comments', $fields))
        {
            return false;
        }
        return true;
    }

    public function find($event_id)
    {
        $data = $this->_db->query('SELECT * FROM event_comments INNER JOIN users on users.uid = event_comments.userID WHERE eventId =? ORDER BY likes DESC', [$event_id]);
        $this->_data = $data->results();
        if ($data)
        {
            return $data->results();
        }
        return false;
    }

    public function findAll($fields = null)
    {
        $data = $this->_db->query('SELECT * FROM event_comments INNER JOIN users on users.uid = event_comments.userID');
        $this->_data = $data->results();
        if ($data)
        {
            return $data->results();
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
