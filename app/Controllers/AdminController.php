<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends BaseController
{

    public function index()
    {
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
    public function data_jemaah()
    {
        $data = [
            'title' => 'Admin Data Jemaah',
            'judul' => 'Data Jemaah',
            'jemaah' => $this->jemaahModel->getJemaahWithPaketName(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()
        ];
        return view('pages/admin/jemaah/admin_data_jemaah', $data);
    }

    public function details_jemaah($id)
    {
        $data = [
            'title' => 'Admin Details Jemaah',
            'judul' => 'Biodata Jemaah',
            'profile' => $this->jemaahModel->getJemaahDetails($id),
            'rombongan' => $this->jemaahModel->rombongan_jemaah($id),
        ];
        return view('pages/admin/jemaah/admin_details_jemaah', $data);
    }


    public function delete_jemaah($id)
    {
        $this->jemaahModel->delete($id);
        session()->setFlashdata('pesan', 'Data Jemaah Berhasil dihapus');
        return redirect()->to('/admin/data_jemaah');
    }

    public function update_jemaah($id)
    {
        $this->jemaahModel->update($id, [
            'status' => 1,
        ]);

        session()->setFlashdata('pesan', 'Berkas Sudah diverifikasi');

        return redirect()->to('/admin/data_jemaah');
    }

    public function paket_umrah()
    {
        $data = [
            'title' => 'Admin Paket Umrah',
            'judul' => 'Data Paket Umrah',
            'paket' => $this->paketModel->tampilPaket()
        ];
        return view('pages/admin/paket/admin_paket_umrah', $data);
    }

    public function tambah_paket()
    {

        $data = [
            'title' => 'Tambah Paket Umrah',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/admin/paket/tambah_paket', $data);
    }

    public function save_paket()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'tipe' => 'required',
            'nama' => 'required',
            'maskapai' => 'required',
            'mekkah' => 'required',
            'madinah' => 'required',
            'harga' => 'required',
            'itenerary' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $this->paketModel->save([
            'tipe' => $this->request->getVar('tipe'),
            'nama' => $this->request->getVar('nama'),
            'maskapai' => $this->request->getVar('maskapai'),
            'mekkah' => $this->request->getVar('mekkah'),
            'madinah' => $this->request->getVar('madinah'),
            'harga' => $this->request->getVar('harga'),
            'itenerary' => $this->request->getVar('itenerary'),
            'tgl_berangkat' => $this->request->getVar('tgl_berangkat'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
        ]);

        session()->setFlashdata('pesan', 'Paket Umrah Berhasil ditambahkan');

        return redirect()->to('/admin/paket_umrah');
    }

    public function edit_paket($id)
    {
        $data = [
            'title' => 'Edit Paket Umrah',
            'paket' => $this->paketModel->editPaket($id),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/admin/paket/edit_paket', $data);
    }

    public function update_paket($id)
    {
        if (!$this->validate([
            'tipe' => 'required',
            'nama' => 'required',
            'maskapai' => 'required',
            'mekkah' => 'required',
            'madinah' => 'required',
            'harga' => 'required',
            'itenerary' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambah_paket')->withInput()->with('validation', $validation);
        }
        $this->paketModel->save([
            'id' => $id,
            'tipe' => $this->request->getVar('tipe'),
            'nama' => $this->request->getVar('nama'),
            'maskapai' => $this->request->getVar('maskapai'),
            'mekkah' => $this->request->getVar('mekkah'),
            'madinah' => $this->request->getVar('madinah'),
            'harga' => $this->request->getVar('harga'),
            'itenerary' => $this->request->getVar('itenerary'),
            'tgl_berangkat' => $this->request->getVar('tgl_berangkat'),
            'tgl_kembali' => $this->request->getVar('tgl_kembali'),
        ]);

        session()->setFlashdata('pesan', 'Paket Umrah Berhasil diupdate');

        return redirect()->to('/admin/paket_umrah');
    }

    public function delete_paket($id)
    {
        $this->paketModel->delete($id);
        session()->setFlashdata('pesan', 'Paket Umrah Berhasil dihapus');
        return redirect()->to('/admin/paket_umrah');
    }


    public function pembayaran()
    {
        $data = [
            'title' => 'Admin Pembayaran',
            'judul' => 'Data Pembayaran',
            'bayar' => $this->pembayaranModel->getPembayaranWithJemaah(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()
        ];
        return view('pages/admin/pembayaran/admin_pembayaran', $data);
    }

    public function update_pembayaran($id)
    {
        $this->pembayaranModel->update($id, [
            'status' => 1,
        ]);

        session()->setFlashdata('pesan', 'Pembayaran Sudah diverifikasi');

        return redirect()->to('/admin/pembayaran');
    }

    public function delete_pembayaran($id)
    {
        $this->pembayaranModel->delete($id);
        session()->setFlashdata('pesan', 'Pembayaran Berhasil dihapus');
        return redirect()->to('/admin/pembayaran');
    }

    public function galeri()
    {
        $data = [
            'title' => 'Admin Galeri',
            'judul' => 'Data Galeri',
            'galeri' => $this->galeriModel->tampilGaleri()
        ];
        return view('pages/admin/galeri/admin_galeri', $data);
    }

    public function tambah_galeri()
    {
        $data = [
            'title' => 'Tambah Galeri'
        ];
        return view('pages/admin/galeri/tambah_galeri', $data);
    }

    public function save_galeri()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'keterangan' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $gambar = $this->request->getFile('gambar');
        $namefile = str_replace(' ', '_', $gambar->getName());
        $filename = $namefile . '_' . time() . '.' . $gambar->getExtension();
        $gambar->move(ROOTPATH . 'public/uploads', $filename);


        $this->galeriModel->save([
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $filename,
        ]);

        session()->setFlashdata('pesan', 'Galeri Baru Berhasil ditambahkan');

        return redirect()->to('/admin/galeri');
    }

    public function edit_galeri($id)
    {
        $data = [
            'title' => 'Edit Galeri',
            'galeri' => $this->galeriModel->editGaleri($id),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/admin/galeri/edit_galeri', $data);
    }

    public function update_galeri($id)
    {
        if (!$this->validate([
            'keterangan' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit_galeri')->withInput()->with('validation', $validation);
        }

        $foto = $this->request->getFile('gambar');
        $namefile = str_replace(' ', '_', $foto->getName());
        $filename = $namefile . '_' . time() . '.' . $foto->getExtension();
        $foto->move(ROOTPATH . 'public/uploads', $filename);

        $this->galeriModel->save([
            'id' => $id,
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $filename,

        ]);

        session()->setFlashdata('pesan', 'Galeri Baru Berhasil diperbaharui');

        return redirect()->to('/admin/galeri');
    }

    public function delete_galeri($id)
    {
        $this->galeriModel->delete($id);
        session()->setFlashdata('pesan', 'Galeri Berhasil dihapus');
        return redirect()->to('/admin/galeri');
    }


    public function testimoni()
    {
        $data = [
            'title' => 'Admin Testimoni',
            'judul' => 'Data Testimoni',
            'testimoni' => $this->testimoniModel->getTestimoni()
        ];
        return view('pages/admin/testimoni/admin_testimoni', $data);
    }
    public function delete_testimoni($id)
    {
        $this->testimoniModel->delete($id);
        session()->setFlashdata('pesan', 'Data Testimoni Berhasil dihapus');
        return redirect()->to('/admin/testimoni');
    }

    public function laporan_pembayaran()
    {

        $data = [
            'title' => 'Admin Laporan Pembayaran',
            'judul' => 'Laporan Pembayaran',
            'status' => $this->jemaahModel->getJemaahWithPaketBayar(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()

        ];
        return view('pages/admin/laporan/admin_laporan_pembayaran', $data);
    }

    public function cetak_pembayaran($id)
    {

        $data = [
            'title' => 'Admin Laporan Pembayaran',
            'judul' => 'Laporan Pembayaran',
            'cetak' => $this->jemaahModel->cetak_pembayaran($id),
            'rombongan' => $this->jemaahModel->rombongan_jemaah($id),

        ];
        return view('pages/admin/laporan/print_pembayaran', $data);
    }

    public function laporan_bulanan()
    {

        $data = [
            'title' => 'Admin Laporan Bulanan',
            'judul' => 'Laporan Bulanan',
            'jemaah' => $this->jemaahModel->getJemaahBulanan(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()

        ];
        return view('pages/admin/laporan/admin_laporan_bulanan', $data);
    }

    public function cetak_bulanan()
    {
        $data = [
            'jemaah' => $this->jemaahModel->getJemaahBulanan(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()

        ];
        return view('pages/admin/laporan/print_bulanan', $data);
    }

    public function laporan_tahunan()
    {
        $data = [
            'title' => 'Admin Laporan Tahunan',
            'judul' => 'Laporan Tahunan',
            'jemaah' => $this->jemaahModel->getJemaahTahunan(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()

        ];
        return view('pages/admin/laporan/admin_laporan_tahunan', $data);
    }

    public function cetak_tahunan()
    {
        $data = [
            'jemaah' => $this->jemaahModel->getJemaahTahunan(),
            'rombongan' => $this->rombonganModel->rombonganJemaah()

        ];
        return view('pages/admin/laporan/print_tahunan', $data);
    }
}
