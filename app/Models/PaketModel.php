<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'tb_paket';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['tipe', 'nama', 'maskapai', 'mekkah', 'madinah', 'harga', 'itenerary', 'tgl_berangkat', 'tgl_kembali'];

    public function editPaket($id)
    {

        return $this->find($id);
    }

    public function getPaket($id)
    {

        return $this->find($id);
    }

    public function tampilPaket()
    {

        return $this->findAll();
    }

    public function totalPaket()
    {
        $builder = $this->db->table('tb_paket');
        $total = $builder->countAllResults();
        return $total;
    }
}
