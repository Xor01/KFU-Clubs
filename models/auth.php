<?php

class Auth {
    
    public static function is_logged_in(){
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }
}