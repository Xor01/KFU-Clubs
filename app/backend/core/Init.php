<?php
session_start();

require_once 'app/backend/auth/config.php';
require_once 'app/backend/core/Helpers.php';

spl_autoload_register("autoload");

require_once 'app/backend/auth/cookie.php';
require_once 'app/backend/auth/user.php';
require_once 'app/backend/auth/announcements.php';
require_once 'app/backend/auth/clubs.php';
require_once 'app/backend/auth/clubManagement.php';
require_once 'app/backend/auth/events.php';
require_once 'app/backend/auth/security_question.php';
require_once 'app/backend/auth/comment.php';