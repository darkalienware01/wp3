<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('assets');
        $session = session();
        $query = $builder->get();
        $row = $query->getResult();
        return view('admin/dashboard', ['row' => $row, 'session' => $session]);
    }
}
