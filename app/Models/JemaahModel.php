<?php

namespace App\Models;

use CodeIgniter\Model;

class JemaahModel extends Model
{
    protected $table = 'tb_jemaah';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['id_paket', 'id_user', 'nama_jemaah', 'tempat_lahir', 'tanggal_lahir',  'jk_jemaah', 'pendidikan', 'pekerjaan', 'kewarganegaraan', 'alamat', 'desa', 'kecamatan', 'kabupaten', 'provinsi', 'hp_jemaah', 'telp_jemaah', 'email_jemaah', 'kode_pos', 'foto', 'ktp', 'kartu_keluarga', 'paspor', 'akta_kelahiran', 'buku_nikah', 'status', 'jml_rombongan'];
    // protected $allowedFields = ['id_paket', 'id_user', 'nama', 'nama_ayah', 'tempat_lahir', 'tgl_lahir', 'jns_kelamin', 'kewarganegaraan', 'pendidikan', 'pekerjaan', 'alamat', 'desa', 'kecamatan', 'kabupaten', 'provinsi', 'kode_pos', 'hp_jemaah', 'telp_jemaah', 'email_jemaah', 'web'];

    public function editJemaah($id)
    {

        return $this->find($id);
    }

    public function getJemaah()
    {
        return $this->findAll();
    }

    public function getJemaahProfile($userId)
    {
        $jemaah = $this->where('id_user', $userId)->first();
        return $jemaah;
    }

    public function getJemaahWithPaketName()
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->select('tb_jemaah.*, tb_paket.nama as nama_paket, tb_paket.tipe');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');
        $builder->where('tb_jemaah.deleted_at IS NULL');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getJemaahBulanan($bulan = null)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->select('tb_jemaah.*, tb_paket.nama as nama_paket, tb_paket.tipe, tb_paket.tgl_berangkat, tb_paket.tgl_kembali');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');


        if ($bulan) {
            $builder->where("DATE_FORMAT(tb_jemaah.created_at, '%M')", $bulan);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    public function getJemaahTahunan($tahun = null)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->select('tb_jemaah.*, tb_paket.nama as nama_paket, tb_paket.tipe, tb_paket.tgl_berangkat, tb_paket.tgl_kembali');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');

        if ($tahun) {
            $builder->where("DATE_FORMAT(tb_jemaah.created_at, '%Y')", $tahun);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    public function getJemaahDetails($id)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');
        $builder->select('
        tb_jemaah.*,
        tb_paket.nama as nama_paket,
        tb_paket.tipe,
        tb_paket.harga,
        tb_paket.maskapai, 
        tb_paket.mekkah,
        tb_paket.madinah, 
        tb_paket.itenerary, 
        tb_paket.tgl_berangkat,
        tb_paket.tgl_kembali');
        $builder->where('tb_jemaah.id', $id);
        $result = $builder->get()->getRow();
        return $result;
    }

    public function rombongan_jemaah($id)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->join('tb_rombongan', 'tb_rombongan.id_jemaah = tb_jemaah.id_user');
        $builder->select('
        tb_jemaah.*,
        tb_rombongan.*,
        ');
        $builder->where('tb_jemaah.id', $id);
        $result = $builder->get()->getResult();
        return $result;
    }

    public function getJemaahWithPaketHarga($userId)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');
        $builder->join('tb_pembayaran', 'tb_pembayaran.id_user = tb_jemaah.id_user', 'left'); // Gunakan left join jika pembayaran mungkin tidak ada
        $builder->select('tb_jemaah.*, tb_jemaah.status as status_jemaah, tb_paket.nama as nama_paket, tb_paket.tipe, tb_paket.harga, tb_pembayaran.sisa_bayar, tb_pembayaran.status, tb_pembayaran.harga_paket,tb_pembayaran.jml_bayar');
        $builder->where('tb_jemaah.id_user', $userId);
        $result = $builder->get()->getRow();
        return $result;
    }


    public function getJemaahWithPaketBayar()
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');
        $builder->join('tb_pembayaran', 'tb_pembayaran.id_user = tb_jemaah.id_user');
        $builder->select('tb_jemaah.*, tb_paket.tipe, tb_pembayaran.harga_paket, tb_paket.harga, tb_pembayaran.status, tb_paket.created_at as tanggal_pesan, tb_pembayaran.created_at as tanggal_bayar, tb_pembayaran.sisa_bayar, tb_pembayaran.jml_bayar');
        $builder->where('tb_pembayaran.deleted_at IS NULL');
        $query = $builder->get();
        return $query->getResult();
    }

    public function cetak_pembayaran($id)
    {
        $builder = $this->db->table('tb_jemaah');
        $builder->join('tb_paket', 'tb_paket.id = tb_jemaah.id_paket');
        $builder->join('tb_pembayaran', 'tb_pembayaran.id_user = tb_jemaah.id_user');
        $builder->select(
            '
            tb_jemaah.id,
            tb_jemaah.nama_jemaah,
            tb_jemaah.jk_jemaah,
            tb_jemaah.tempat_lahir,
            tb_jemaah.alamat,
            tb_jemaah.hp_jemaah,
            tb_jemaah.created_at as tanggal_lahir,
            tb_paket.id as paket_id, 
            tb_paket.nama as nama_paket, 
            tb_paket.tgl_berangkat, 
            tb_pembayaran.id as pembayaran_id, 
            tb_paket.created_at as tanggal_pesan, 
            tb_pembayaran.created_at as tanggal_bayar, 
            tb_pembayaran.sisa_bayar, 
            tb_pembayaran.status,  
            tb_pembayaran.harga_paket as harga,  
            tb_pembayaran.jml_bayar
            '
        );
        $builder->where('tb_jemaah.id', $id);
        $query = $builder->get();

        // Menggunakan getRow() karena hanya ingin satu baris data
        return $query->getRow();
    }


    public function totalJemaah()
    {
        $builder = $this->db->table('tb_jemaah');
        $total = $builder->countAllResults();
        return $total;
    }
}
