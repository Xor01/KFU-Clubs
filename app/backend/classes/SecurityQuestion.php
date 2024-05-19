<?php
class SecurityQuestion
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
        if (!$this->_db->insert('security_questions', $fields))
        {
            return false;
        }
        return true;
    }

    public function findAll()
    {

            $data = $this->_db->query('Select * from security_questions');
            $this->_data = $data->results();
            if ($data)
            {
                return $data->results();
            }
            return false;
        
    }

    public function find($question_id)
    {

            $data = $this->_db->query('Select * from security_questions where security_questionID=?', [$question_id]);
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

        if (!$this->_db->update('security_questions', $id, $fields))
        {
            throw new Exception('Unable to update the question.');
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
