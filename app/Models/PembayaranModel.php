<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'tb_pembayaran';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_user', 'harga_paket', 'jml_bayar', 'sisa_bayar', 'bukti_bayar', 'status'];

    public function getPembayaranWithJemaah()
    {
        $builder = $this->db->table('tb_pembayaran');
        $builder->join('tb_jemaah', 'tb_pembayaran.id_user = tb_jemaah.id_user');
        $builder->select('tb_pembayaran.*, tb_jemaah.nama as nama_jemaah, tb_pembayaran.status as status_bayar');
        $builder->where('tb_pembayaran.deleted_at IS NULL');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getBayarJemaah($userId)
    {
        $bayar = $this->where('id_user', $userId)->first();
        return $bayar;
    }

    public function pelunasan($userId)
    {
        $lunas = $this->where('id_user', $userId)->first();
        return $lunas;
    }
    public function totalPembayaran()
    {
        $builder = $this->db->table('tb_pembayaran');
        $total = $builder->countAllResults();
        return $total;
    }
}
