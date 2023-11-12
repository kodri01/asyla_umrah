<?php

namespace App\Controllers;

use App\Models\JemaahModel;
use Myth\Auth\Collectors\Auth;
use PHPUnit\Util\Xml\Validator;
use CodeIgniter\Validation\Validation;


class AsylaUmrah extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Beranda Jemaah',
        ];
        return view('pages/asyla/beranda_jemaah', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('pages/asyla/profil', $data);
    }

    public function profile_jemaah()
    {
        $userId = user()->id;
        $data = [
            'title' => 'Profile Jemaah',
            'profile' => $this->jemaahModel->getJemaahProfile($userId),
            'bayar' => $this->pembayaranModel->getBayarJemaah($userId)
        ];

        return view('pages/asyla/profile_jemaah', $data);
    }

    public function edit_jemaah($id)
    {
        $data = [
            'title' => 'Edit Jemaah',
            'profile' => $this->jemaahModel->editJemaah($id)
        ];

        return view('pages/asyla/edit_jemaah', $data);
    }

    public function edit_berkas($id)
    {
        $data = [
            'title' => 'Edit Berkas',
            'profile' => $this->jemaahModel->editJemaah($id)
        ];

        return view('pages/asyla/edit_berkas', $data);
    }

    public function pembayaran()
    {
        $userId = user()->id;
        $data = [
            'title' => 'Pembayaran',
            'profile' => $this->jemaahModel->getJemaahWithPaketHarga($userId),
            'pelunasan' => $this->pembayaranModel->pelunasan($userId)

        ];
        return view('pages/asyla/pembayaran', $data);
    }

    public function save_pembayaran()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'jml_bayar' => 'required',
        ];

        if (!$this->validate($rules)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $errors);
        }

        $foto = $this->request->getFile('bukti_bayar');
        $namefile = str_replace(' ', '_', $foto->getName());
        $filename = $namefile . '_' . time() . '.' . $foto->getExtension();
        $foto->move(ROOTPATH . 'public/uploads', $filename);

        $harga_paket = $this->request->getVar('total_harga_paket');
        $jml_bayar = $this->request->getVar('jml_bayar');
        $sisabayar = $harga_paket - $jml_bayar;

        // Simpan data pembayaran ke dalam database
        $id_user = user()->id;
        $this->pembayaranModel->save([
            'id_user' => $id_user,
            'harga_paket' => $harga_paket,
            'jml_bayar' => $jml_bayar,
            'sisa_bayar' => $sisabayar,
            'bukti_bayar' => $filename,
            'status' => 0,
        ]);

        // Sesuaikan pesan sukses dan redirect sesuai kebutuhan Anda
        session()->setFlashdata('pesan', 'Pembayaran Berhasil, Tunggu Informasi dari Admin');

        return redirect()->to('/asyla/profile_jemaah');
    }


    public function pelunasan()
    {
        $userId = user()->id;
        $data = [
            'title' => 'Pembayaran',
            'pelunasan' => $this->pembayaranModel->pelunasan($userId)
        ];
        return view('pages/asyla/pelunasan', $data);
    }

    public function update_pembayaran($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'jml_bayar' => 'required',
        ];
        if (!$this->validate($rules)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $errors);
        }

        $foto = $this->request->getFile('bukti_bayar');
        $namefile = str_replace(' ', '_', $foto->getName());
        $filename = $namefile . '_' . time() . '.' . $foto->getExtension();
        $foto->move(ROOTPATH . 'public/uploads', $filename);

        $previousPayment = $this->pembayaranModel->find($id);

        // Ambil nilai jml_bayar sebelumnya dan sisa_bayar sebelumnya
        $previousJmlBayar = $previousPayment['jml_bayar'];

        // Ambil nilai jml_bayar dan harga_paket dari form input    
        $jml_bayar = $this->request->getVar('jml_bayar');
        $harga_paket = $this->request->getVar('harga_paket');

        // Hitung total pembayaran (jml_bayar sekarang + jml_bayar sebelumnya)
        $totalBayar = $previousJmlBayar + $jml_bayar;

        // Hitung sisa bayar
        $sisa_bayar = $totalBayar - $harga_paket;

        $this->pembayaranModel->update($id, [
            'jml_bayar' => $totalBayar,
            'sisa_bayar' => $sisa_bayar,
            'bukti_bayar' => $filename,
        ]);

        session()->setFlashdata('pesan', 'Pelunasan Berhasil, Tunggu Konfirmasi dari Admin');

        return redirect()->to('/asyla/profile_jemaah');
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('pages/asyla/kontak', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'Galeri',
            'galeri' => $this->galeriModel->tampilGaleri()
        ];
        return view('pages/asyla/galeri', $data);
    }
    public function testimoni()
    {
        $data = [
            'title' => 'Testimoni',
            'testimoni' => $this->testimoniModel->getTestimoni()
        ];
        return view('pages/asyla/testimoni', $data);
    }
    public function testimoni_jemaah($id)
    {
        $id = user()->id;
        $data = [
            'title' => 'Tambah Testimoni',
        ];
        return view('pages/asyla/testimoni_jemaah', $data);
    }
    public function save_testimoni($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'isi' => 'required',

        ];
        if (!$this->validate($rules)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $errors);
        }

        $id_user = user()->id;
        $this->testimoniModel->save([
            'id_user' => $id_user,
            'isi' => $this->request->getVar('isi'),
        ]);

        session()->setFlashdata('pesan', 'Testimoni Berhasil ditambahkan');

        return redirect()->to('/asyla/profile_jemaah');
    }

    public function paket()
    {
        $data = [
            'title' => 'Paket',
            'judul' => 'Pilih Paket Umrah',
            'paket' => $this->paketModel->tampilPaket()
        ];
        return view('pages/asyla/paket', $data);
    }

    public function daftar_jemaah($id)
    {
        $data = [
            'title' => 'Form Daftar Jemaah',
            'validation' => \Config\Services::validation(),
            'paket' => $this->paketModel->getPaket($id),
        ];
        return view('pages/asyla/daftar_jemaah', $data);
    }
    public function save_jemaah($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama_jemaah' => 'required',
            'tempat_lahir' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'hp_jemaah' => 'required',
            'telp_jemaah' => 'required',
            'email_jemaah' => 'required',
            'kode_pos' => 'required',
        ];
        if (!$this->validate($rules)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $errors);
        }

        $foto = $this->request->getFile('foto');
        $filename = '';
        if ($foto->isValid() && !$foto->hasMoved()) {
            $namefile = str_replace(' ', '_', $foto->getName());
            $filename = $namefile . '_' . time() . '.' . $foto->getExtension();
            $foto->move(ROOTPATH . 'public/uploads', $filename);
        }

        $filektp = $this->request->getFile('ktp');
        $filename1 = '';
        if ($filektp->isValid() && !$filektp->hasMoved()) {
            $namefile1 = str_replace(' ', '_', $filektp->getName());
            $filename1 = $namefile1 . '_' . time() . '.' . $filektp->getExtension();
            $filektp->move(ROOTPATH . 'public/uploads', $filename1);
        }

        $kk = $this->request->getFile('kartu_keluarga');
        $filename2 = '';
        if ($kk->isValid() && !$kk->hasMoved()) {
            $namefile2 = str_replace(' ', '_', $kk->getName());
            $filename2 = $namefile2 . '_' . time() . '.' . $kk->getExtension();
            $kk->move(ROOTPATH . 'public/uploads', $filename2);
        }

        $paspor = $this->request->getFile('paspor');
        $filename3 = '';
        if ($paspor->isValid() && !$paspor->hasMoved()) {
            $namefile3 = str_replace(' ', '_', $paspor->getName());
            $filename3 = $namefile3 . '_' . time() . '.' . $paspor->getExtension();
            $paspor->move(ROOTPATH . 'public/uploads', $filename3);
        }

        $buku = $this->request->getFile('buku_nikah');
        $filename4 = '';
        if ($buku->isValid() && !$buku->hasMoved()) {

            $namefile4 = str_replace(' ', '_', $buku->getName());
            $filename4 = $namefile4 . '_' . time() . '.' . $buku->getExtension();
            $buku->move(ROOTPATH . 'public/uploads', $filename4);
        }

        $akte = $this->request->getFile('akta_kelahiran');
        $filename5 = '';
        if ($akte->isValid() && !$akte->hasMoved()) {
            $namefile5 = str_replace(' ', '_', $akte->getName());
            $filename5 = $namefile5 . '_' . time() . '.' . $akte->getExtension();
            $akte->move(ROOTPATH . 'public/uploads', $filename5);
        }

        $selectjk1 = $this->request->getPost('jk_jemaah');
        $selectkw = $this->request->getPost('kewarganegaraan');
        $paket = $id;
        $id_user = user()->id;
        $this->jemaahModel->save([
            'id_paket' => $paket,
            'id_user' => $id_user,
            'nama_jemaah' => $this->request->getVar('nama_jemaah'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jk_jemaah' => $selectjk1,
            'kewarganegaraan' => $selectkw,
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'desa' => $this->request->getVar('desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'hp_jemaah' => $this->request->getVar('hp_jemaah'),
            'telp_jemaah' => $this->request->getVar('telp_jemaah'),
            'email_jemaah' => $this->request->getVar('email_jemaah'),
            'kode_pos' => $this->request->getVar('kode_pos'),
            'foto' => $filename,
            'ktp' => $filename1,
            'kartu_keluarga' => $filename2,
            'paspor' => $filename3,
            'buku_nikah' => $filename4,
            'akta_kelahiran' => $filename5,
            'status' => 0,
            'jml_rombongan' => $this->request->getVar('jml_rombongan')
        ]);
        $jemaahId = $id_user;

        $jumlahRombongan = $this->request->getVar('jml_rombongan');

        for ($i = 0; $i < $jumlahRombongan; $i++) {
            // Ambil data dari permintaan POST
            $namaAnggota = $this->request->getVar("rombongan_" . $i . "_nama_lengkap");
            $tanggalLahir = $this->request->getVar("rombongan_" . $i . "_tanggal_lahir");
            $jenisKelamin = $this->request->getVar("rombongan_" . $i . "_jenis_kelamin");
            $hubunganKeluarga = $this->request->getVar("rombongan_" . $i . "_hubungan_keluarga");

            $fotoRombongan = $this->request->getFile("rombongan_" . $i . "_foto");
            $filenameRombongan = '';
            if ($fotoRombongan->isValid() && !$fotoRombongan->hasMoved()) {
                $namefileRombongan = str_replace(' ', '_', $fotoRombongan->getName());
                $filenameRombongan = $namefileRombongan . '_' . time() . '.' . $fotoRombongan->getExtension();
                $fotoRombongan->move(ROOTPATH . 'public/uploads', $filenameRombongan);
            }

            $ktpRombongan = $this->request->getFile("rombongan_" . $i . "_foto_ktp");
            $filenameRombongan1 = '';
            if ($ktpRombongan->isValid() && !$ktpRombongan->hasMoved()) {
                $namefileRombongan1 = str_replace(' ', '_', $ktpRombongan->getName());
                $filenameRombongan1 = $namefileRombongan1 . '_' . time() . '.' . $ktpRombongan->getExtension();
                $ktpRombongan->move(ROOTPATH . 'public/uploads', $filenameRombongan1);
            }

            $pasporRombongan = $this->request->getFile("rombongan_" . $i . "_paspor");
            $filenameRombongan2 = '';
            if ($pasporRombongan->isValid() && !$pasporRombongan->hasMoved()) {
                $namefileRombongan2 = str_replace(' ', '_', $pasporRombongan->getName());
                $filenameRombongan2 = $namefileRombongan2 . '_' . time() . '.' . $pasporRombongan->getExtension();
                $pasporRombongan->move(ROOTPATH . 'public/uploads', $filenameRombongan2);
            }
            // Simpan data ke database menggunakan model
            $this->rombonganModel->save([
                'id_jemaah' => $jemaahId,
                'nama_anggota' => $namaAnggota,
                'tanggal_lahir_anggota' => $tanggalLahir,
                'jenis_kelamin_anggota' => $jenisKelamin,
                'hubungan_anggota' => $hubunganKeluarga,
                'foto_anggota' => $filenameRombongan,
                'foto_ktp_anggota' => $filenameRombongan1,
                'foto_paspor_anggota' => $filenameRombongan2,
            ]);
        }

        session()->setFlashdata('pesan', 'Pendaftaran Berhasil ditambahkan');

        return redirect()->to('/asyla/profile_jemaah');
    }

    public function update_jemaah($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'usia' => 'required',
            'hp_jemaah' => 'required',
            'telp_jemaah' => 'required',
            'kode_pos' => 'required',
        ];
        if (!$this->validate($rules)) {
            $errors = $validation->getErrors();
            return redirect()->back()->withInput()->with('validation', $errors);
        }



        $this->jemaahModel->update($id, [
            'nama' => $this->request->getVar('nama'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'desa' => $this->request->getVar('desa'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'provinsi' => $this->request->getVar('provinsi'),
            'usia' => $this->request->getVar('usia'),
            'hp_jemaah' => $this->request->getVar('hp_jemaah'),
            'telp_jemaah' => $this->request->getVar('telp_jemaah'),
            'kode_pos' => $this->request->getVar('kode_pos'),
        ]);

        session()->setFlashdata('pesan', 'Ubah Data Berhasil');

        return redirect()->to('/asyla/profile_jemaah');
    }


    public function update_berkas($id)
    {
        // Dapatkan data profil pengguna dari database
        $profile = $this->jemaahModel->find($id);

        $allowed_types = ['ktp', 'kartu_keluarga', 'paspor', 'akta_kelahiran', 'buku_nikah'];
        $file_names = [];

        foreach ($allowed_types as $type) {
            $file = $this->request->getFile($type);
            if ($file->isValid()) {
                $namefile = str_replace(' ', '_', $file->getName());
                $filename = $namefile . '_' . time() . '.' . $file->getExtension();
                $file->move(ROOTPATH . 'public/uploads', $filename);
            } else {
                // Jika tidak ada berkas yang diunggah, gunakan berkas yang ada di database
                $filename = $profile[$type];
            }

            $file_names[$type] = $filename;
        }

        // Update database dengan nama berkas yang sesuai
        $this->jemaahModel->update($id, $file_names);

        session()->setFlashdata('pesan', 'Berkas Data Berhasil Diubah');

        return redirect()->to('/asyla/profile_jemaah');
    }



    public function upload_foto($id)
    {

        $foto = $this->request->getFile('foto');
        $namefile = str_replace(' ', '_', $foto->getName());
        $filename = $namefile . '_' . time() . '.' . $foto->getExtension();
        $foto->move(ROOTPATH . 'public/uploads', $filename);


        $this->jemaahModel->update($id, [
            'foto' => $filename,
        ]);

        return redirect()->to('/asyla/profile_jemaah');
    }
}
