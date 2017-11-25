<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * The User type model
 * 
 * @author      Didier Viret
 * @link        https://github.com/DidierViret
 * @copyright   Copyright (c) 2017, Didier Viret
 */

class User_group_model extends MY_Model
{
    /* MY_Model variables definition */
    protected $_table = 'user_group';
    protected $primary_key = 'id';
    protected $protected_attributes = ['id'];
    protected $has_many = ['users'];


    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();
    }
}