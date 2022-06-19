<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InventoryModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->inventoryModel = new InventoryModel();
        $this->session = \Config\Services::session();
        $this->page404 = \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    public function index()
    {
        if (!$this->session->get('username')) {
            return redirect()->to('/login');
        }

        $per_tahun = $this->inventoryModel
            ->select('
                year,
                COUNT(year) as banyak_barang,
                SUM(price) as total_harga,
            ')
            ->groupBy('year')
            ->findAll();

        $total_harga = $this->inventoryModel
            ->select('
                SUM(price) as total_harga,
            ')
            ->first();

        $data = [
            'per_tahun' => $per_tahun,
            'total_harga' => $total_harga['total_harga'],
            'color_random' => ['border-left-primary', 'border-left-info', 'border-left-danger', 'border-left-warning', 'border-left-success']
        ];
        return view('dashboard/index', $data);
    }
}
