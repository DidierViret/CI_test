<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * The User model
 * 
 * @author      Didier Viret
 * @link        https://github.com/DidierViret
 * @copyright   Copyright (c) 2017, Didier Viret
 */

class User_model extends MY_Model
{
    /* MY_Model variables definition */
    protected $_table = 'user';
    protected $primary_key = 'id';
    protected $protected_attributes = ['id'];
    protected $belongs_to = ['user_group'];

    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check username and password for login
     * Also check if user is active
     *
     * @access public
     * @param $username
     * @param $password
     * @return bool true on success, false on failure
     */
    public function check_password($username, $password)
    {
        $user = $this->user_model->get_by('username', $username);

        if (!is_null($user) && $user->is_active == true) {
            // A corresponding active user has been found
            // Check password
            return password_verify($password, $user->password);
        }
        else {
            // No corresponding active user
            return false;
        }
    }
}