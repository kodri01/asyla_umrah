<?php

namespace App\Models;

use CodeIgniter\Model;

class RombonganModel extends Model
{
    protected $table = 'tb_rombongan';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_jemaah', 'nama_anggota', 'tanggal_lahir_anggota', 'jenis_kelamin_anggota', 'hubungan_anggota', 'foto_anggota', 'foto_ktp_anggota', 'foto_paspor_anggota',];


    public function rombonganJemaah()
    {
        $builder = $this->db->table('tb_rombongan');
        $builder->join('tb_jemaah', 'tb_rombongan.id_jemaah = tb_jemaah.id_user');
        $builder->select('tb_rombongan.*, tb_jemaah.*');
        $builder->where('tb_rombongan.deleted_at IS NULL');
        $query = $builder->get();
        return $query->getResult();
    }
}
