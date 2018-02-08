<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Test of Bootstrap Multiselect plugin
 *
 * @author      Didier Viret
 * @link        https://github.com/DidierViret
 * @copyright   Copyright (c) 2017, Didier Viret
 */
class Multiselect extends MY_Controller
{
    /* MY_Controller variables definition */
    protected $access_level = "*";


    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display view for test of Bootstrap Multiselect
     */
    public function index()
    {
		$this->display_view('multiselect/test');
	}
}