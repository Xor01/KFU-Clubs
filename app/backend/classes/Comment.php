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

    public function createLike($fields = array())
    {
        if (!$this->_db->insert('comment_likes', $fields))
        {
            return false;
        }
        return true;
    }

    public function find($event_id)
    {
        $data = $this->_db->query(
            'SELECT users.username, event_comments.comment, users.uid, event_comments.created_at, event_comments.commentID,
            COUNT(comment_likes.likeID) as likes 
     FROM event_comments 
     INNER JOIN users ON users.uid = event_comments.userID 
     LEFT JOIN comment_likes ON event_comments.commentID = comment_likes.commentID 
     WHERE event_comments.eventID = ? 
     GROUP BY event_comments.commentID, users.username, users.uid, event_comments.comment, event_comments.created_at 
     ORDER BY likes DESC;', [$event_id]);
        $this->_data = $data->results();
        if ($data)
        {
            return $data->results();
        }
        return false;
    }

    public function findAll($fields = null)
    {
        $data = $this->_db->query('SELECT event_comments.comment, users.uid, event_comments.created_at, count(likeID) as likes FROM event_comments INNER JOIN users on users.uid = event_comments.userID INNER JOIN comment_likes ON event_comments.commentID = comment_likes.commentID AND comment_likes.userID = users.uid');
        $this->_data = $data->results();
        if ($data)
        {
            return $data->results();
        }
        return false;
    }


    public function toggleLikes($commentID, $userID){
        $data = $this->_db->query('SELECT likeID FROM comment_likes WHERE commentID=? and userID=?', [$commentID, $userID]);
        $this->_data = $data->results();
        if ($data->count() > 0)
        {
            $this->deleteLike($data->results()[0]->likeID);
            echo "found a like";
            return true;
        }
        echo "did not find a like";
        echo $commentID . " " . $userID;
        $res = $this->createLike(
            [
                "commentID"=> $commentID,
                "userID"=> $userID,
            ]
        );
        var_dump($res);
        return true;
    }

   

    public function exists()
    {
        return (!empty($this->_data)) ? true : false;
    }

    public function data()
    {
        return $this->_data;
    }

    public function deleteLike($likeID)
    {
        if (!$this->_db->delete('comment_likes', array('likeID', '=', $likeID)))
        {
            return false;
        }
        return true;
    }
}
