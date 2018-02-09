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
    private $items = [ '1' => 'cheese',
               '2' => 'tomatoes',
               '3' => 'mozarella',
               '4' => 'mushrooms',
               '5' => 'pepperoni',
               '6' => 'onions'];

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
        $outputs['items'] = $this->items;
        $outputs['selection'] = '';

		$this->display_view('multiselect/test', $outputs);
	}

    /**
     * Display view for test of Bootstrap Multiselect
     */
    public function submit()
    {
        $outputs['items'] = $this->items;
        $outputs['selection'] = $this->input->post('multiselect');

        $this->display_view('multiselect/test', $outputs);
    }
}