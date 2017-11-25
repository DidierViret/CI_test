<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Authentication System
 *
 * @author      Didier Viret
 * @link        https://github.com/DidierViret
 * @copyright   Copyright (c) 2017, Didier Viret
 */
class Auth extends MY_Controller
{
    /* MY_Controller variables definition */
    protected $access_level = "*";


    /**
    * Constructor
    */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('user_group_model');
        $this->load->library('form_validation');
    }


    /**
     * Login and create session variables
     */
    public function login()
    {
        // Validation rules
        $this->form_validation->set_rules('username', $this->lang->line('field_username'), 'required');

        if ($this->form_validation->run() == true) {
            // Fields validation passed
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user_model->check_password($username, $password)) {
                // Login success
                $user = $this->user_model->with('user_group')
                                         ->get_by('username', $username);

                // Set session variables
                $_SESSION['user_id'] = (int)$user->id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['access_level'] = (int)$user->user_group->level;
                $_SESSION['logged_in'] = (bool)true;

                // Set message and redirect
                $this->session->set_flashdata('message', 'user login ok');
                redirect('/');

            } else {
                // Login failed

                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">'.$this->lang->line('msg_err_invalid_password').'</div>');
            }
        }

        // Display login page
        $outputs['title'] = $this->lang->line('page_login');
        $this->display_view('auth/login', $outputs);
    }


    /**
     * Logout and destroy the session
     */
    public function logout()
    {
        // Destroy the current session
        $this->session->sess_destroy();
        
        redirect('/');
    }
}