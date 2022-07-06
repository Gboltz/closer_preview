<?php

class Action
{

    public $db, $session, $custom, $view, $helper;

    function onlyForAuthUsers()
    {
        if (!$this->session->get('Auth')) $this->helper->redirect('login');
    }

    function onlyForUnauthUsers()
    {
        if ($this->session->get('Auth')) $this->helper->redirect('home');
    }

    function user_id()
    {
        return $_SESSION['Auth']['data']['id'];
    }

    function is_logged(): bool
    {
        if (isset($_SESSION['Auth'])) {
            return true;
        }
        return false;
    }

    function __construct()
    {
        $this->db = new Database;
        $this->session = new Session;
        $this->custom = new Custom;
        $this->view = new View;
        $this->helper = new Helper;
    }
}
