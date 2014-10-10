<?php
/*======================================================================*\
|| #################################################################### ||
|| # PHP Utilities Alpha 2                                            # ||
|| # ---------------------------------------------------------------- # ||
|| #         Useful Everyday PHP classes, that work as one!           # ||
|| # ---------------------------------------------------------------- # ||
|| #     All PHP code in this file is ©2014 VisionWare Studios        # ||
|| #        This script is released under The MIT License.            # ||
|| #                                                                  # ||
|| #  --------------- PHP VERSION 5.5.0 OR GREATER -----------------  # ||
|| #                                                                  # ||
|| #                  http://visionware-studios.com                   # ||
|| #################################################################### ||
\*======================================================================*/

class Session
{
    private $_logged_in = FALSE;
    public $user_id;
    public $username;

    public function __construct()
    {
        session_start();
        $this->check_login();
    }

    public function is_logged_in()
    {
        return $this->_logged_in;
    }

    public function login($user)
    {
        if ($user)
        {
            $this->user_id = $_SESSION['user_id'];
            $this->username = $_SESSION['username'];
            $this->_logged_in = TRUE;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->_logged_in = FALSE;
    }

    private function check_login()
    {
        if (isset($_SESSION['user_id']))
        {
          $this->user_id = $_SESSION['user_id'];
            $this->username = $_SESSION['username'];
          $this->_logged_in = TRUE;
        }
        else
        {
            unset($this->user_id);
            unset($this->username);
            $this->_logged_in = FALSE;
        }
    }
}
