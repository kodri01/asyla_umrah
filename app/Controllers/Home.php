<?php

namespace App\Controllers;

class Home extends BaseController
{


    public function index()
    {
        if (in_groups('user')) {
            $userId = user()->id;
            $data = [
                'title' => 'Beranda Jemaah',
                'beranda' => $this->jemaahModel->getJemaahProfile($userId)
            ];
            return view('pages/asyla/beranda_jemaah', $data);
        }
        if (in_groups('admin')) {
            $data = [
                'title' => 'Admin Dashboard',
                'judul' => 'Dashboard',
                'jemaah' => $this->jemaahModel->totalJemaah(),
                'paket' => $this->paketModel->totalPaket(),
                'pembayaran' => $this->pembayaranModel->totalPembayaran(),
                'status' => $this->jemaahModel->getJemaahWithPaketBayar()
            ];
            return view('pages/admin/dashboard/admin_dashboard', $data);
        }

        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/asyla/main', $data);
    }
}
