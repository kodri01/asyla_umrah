<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'tb_galeri';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['keterangan', 'gambar'];

    public function editGaleri($id)
    {

        return $this->find($id);
    }

    public function getGaleri($id)
    {

        return $this->find($id);
    }

    public function tampilGaleri()
    {

        return $this->findAll();
    }
}
