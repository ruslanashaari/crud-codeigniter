<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends BaseController
{
    public $title = 'First to CodeIgniter';

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *     - or -
     *         http://example.com/index.php/welcome/index
     *     - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('home');
    }

    public function create()
    {
        die('create');
    }

    public function show()
    {
        die('show');
    }

    public function edit()
    {
        die('edit');
    }

    public function destroy()
    {
        die('destroy');
    }
}