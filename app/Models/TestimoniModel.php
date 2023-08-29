<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = 'tb_testimoni';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_user', 'isi'];

    public function getTestimoni()
    {
        $builder = $this->db->table('tb_testimoni');
        $builder->select('tb_testimoni.*, tb_jemaah.id as id_jemaah, tb_jemaah.nama, tb_jemaah.foto');
        $builder->join('tb_jemaah', 'tb_testimoni.id_user = tb_jemaah.id_user');
        $builder->where('tb_testimoni.deleted_at IS NULL');
        $query = $builder->get();
        return $query->getResult();
    }
}
