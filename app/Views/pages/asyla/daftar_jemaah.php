<?php

use Myth\Auth\Config\Auth;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section style="margin-top: 4rem;" class="mx-5">
    <form method="POST" action="/asyla/save_jemaah/<?= $paket['id']; ?>" enctype="multipart/form-data">
        <div class="container-fluid text-center">
            <h2 class="text-uppercase">Form Pendaftaran Jemaah</h2>
        </div>
        <div class="mb-3">
            <h5>Data Diri Jemaah</h5>
        </div>
        <div>
            <input type="hidden" name="id_paket" value="<?= $paket['id']; ?>">
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="" class="">Nama Lengkap Jemaah</label>
                <input type="text" autocomplete="off" class="form-control <?php echo ($validation->hasError('nama_jemaah')) ? 'is-invalid' : ''; ?>" name="nama_jemaah" value="<?= old('nama_jemaah') ?>" placeholder="Nama Lengkap Jemaah" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('nama_jemaah'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Tanggal Lahir</label>
                <input type="date" autocomplete="off" class="form-control <?php echo ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('tanggal_lahir'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="">Tempat Lahir</label>
                <input type="text" autocomplete="off" class="form-control <?php echo ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" name="tempat_lahir" value="<?= old('tempat_lahir') ?>" placeholder="Tempat Lahir" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('tempat_lahir'); ?>
                </div>
            </div>
            <fieldset class="col-md-6 mb-2">
                <label class="ml-1 pt-0">Jenis Kelamin</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_jemaah" id="option1" value="laki-laki" checked>
                            <label class="form-check-label" for="option1">
                                Laki-Laki
                            </label>
                        </div>
                    </div>
                    <div class="col mr-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_jemaah" id="option2" value="perempuan" checked>
                            <label class="form-check-label" for="option2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="" class="">Pendidikan Jemaah</label>
                <input type="text" autocomplete="off" class="form-control <?php echo ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" name="pendidikan" value="<?= old('pendidikan') ?>" placeholder="Pendidikan Anda" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('pendidikan'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Pekerjaan Jemaah</label>
                <input type="text" autocomplete="off" class="form-control <?php echo ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" name="pekerjaan" value="<?= old('pekerjaan') ?>" placeholder="Pekerjaan Anda" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('pekerjaan'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <fieldset class="col-md-6 mb-2">
                <label class="ml-1 pt-0">Kewarganegaraan</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" id="option3" value="indonesia" checked>
                            <label class="form-check-label" for="option3">Indonesia</label>
                        </div>
                    </div>
                    <div class="col mr-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" id="option4" value="asing" checked>
                            <label class="form-check-label" for="option4">Asing</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="col-md-6">
                <label for="" class="">Alamat</label>
                <input type="text" autocomplete="off" name="alamat" class="form-control <?php echo ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Alamat Lengkap Anda" aria-label="" value="<?= old('alamat'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('alamat'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">

            <div class="col-md-6">
                <label for="" class="">Desa</label>
                <input type="text" autocomplete="off" name="desa" class="form-control <?php echo ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Desa Anda" aria-label="" value="<?= old('desa'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('desa'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Kecamatan</label>
                <input type="text" autocomplete="off" name="kecamatan" class="form-control <?php echo ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Kecamatan Anda" aria-label="" value="<?= old('kecamatan'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('kecamatan'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">

            <fieldset class="col-md-6 mb-2">
                <label class="ml-1 pt-0">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-control">
                    <option value="" disabled selected>-- Select Kabupaten --</option>
                    <option value="Batanghari">Batanghari</option>
                    <option value="Bungo">Bungo</option>
                    <option value="Kerinci">Kerinci</option>
                    <option value="Merangin">Merangin</option>
                    <option value="Muaro Jambi">Muaro Jambi</option>
                    <option value="Sarolangun">Sarolangun</option>
                    <option value="Tanjung Jabung Barat">Tanjung Jabung Barat</option>
                    <option value="Tanjung Jabung Timur">Tanjung Jabung Timur</option>
                    <option value="Tebo">Tebo</option>
                    <option value="Kota Jambi">Kota Jambi</option>
                    <option value="Sungai Penuh">Sungai Penuh</option>
                </select>
            </fieldset>
            <div class="col-md-6">
                <label for="" class="">Provinsi</label>
                <input type="text" autocomplete="off" name="provinsi" class="form-control <?php echo ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Provinsi Anda" aria-label="" value="<?= old('provinsi'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('provinsi'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Handphone Jemaah</label>
                <input type="text" autocomplete="off" name="hp_jemaah" class="form-control <?php echo ($validation->hasError('hp_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="+628123+++++" aria-label="" value="<?= old('hp_jemaah'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('hp_jemaah'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Telepon Jemaah</label>
                <input type="text" autocomplete="off" name="telp_jemaah" class="form-control <?php echo ($validation->hasError('telp_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="02123456" aria-label="" value="<?= old('telp_jemaah'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('telp_jemaah'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Email Jemaah</label>
                <input type="text" name="email_jemaah" class="form-control <?php echo ($validation->hasError('email_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="" aria-label="" value="<?= user()->email ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('email_jemaah'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Kode Pos</label>
                <input type="text" autocomplete="off" name="kode_pos" class="form-control <?php echo ($validation->hasError('kode_pos')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Kode Pos Anda" aria-label="" value="<?= old('kode_pos'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('kode_pos'); ?>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h5>Lengkapi Berkas </h5>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Foto</label>
                <input type="file" name="foto" class="form-control " placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Foto KTP</label>
                <input type="file" name="ktp" class="form-control " placeholder="" aria-label="">

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Kartu Keluarga</label>
                <input type="file" name="kartu_keluarga" class="form-control" placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Paspor</label>
                <input type="file" name="paspor" class="form-control " placeholder="" aria-label="">

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Akta Kelahiran</label>
                <input type="file" name="akta_kelahiran" class="form-control " placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Buku Nikah</label>
                <input type="file" name="buku_nikah" class="form-control " placeholder="" aria-label="">

            </div>
        </div>

        </fieldset>
        <div class="row mt-2 w-50">
            <div class="col-md-6">
                <label for="jumlah_rombongan" class="">Jumlah Rombongan:</label>
                <input type="number" id="jumlah_rombongan" name="jml_rombongan" min="0" required class="form-control <?php echo ($validation->hasError('jml_rombongan')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Jumlah Rombongan" aria-label="" value="<?= old('jml_rombongan'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('jml_rombongan'); ?>
                </div>

            </div>
            <div class="col-md-6">
                <button type="button" id="tambah-rombongan" class="btn-primary mt-4">+Rombongan</button>
            </div>
        </div>

        <!-- Form Rombongan (jika ada) -->
        <div id="rombongan-form" class="mt-3">
            <!-- Form rombongan akan di-generate melalui JavaScript -->
        </div>

        <div class="gap-4 mt-4">
            <button class="btn btn-success " type="submit">Daftar</button>
            <a class="btn btn-danger" href="/asyla/daftar">Batal</a>
        </div>
    </form>
</section>

<script>
    document.getElementById("tambah-rombongan").addEventListener("click", function() {
        const jumlahRombongan = document.getElementById("jumlah_rombongan").value;
        const rombonganForm = document.getElementById("rombongan-form");

        for (let i = 0; i < jumlahRombongan; i++) {
            const rombonganLabel = document.createElement("h4");
            rombonganLabel.textContent = `Anggota ${i + 1}`;
            rombonganForm.appendChild(rombonganLabel);

            const rombonganFields = [{
                    label: "Nama Lengkap",
                    type: "text",
                    placeholder: "Masukan Nama Lengkap"
                },
                {
                    label: "Tanggal Lahir",
                    type: "date"
                },
                {
                    label: "Jenis Kelamin",
                    type: "radio",
                    options: ["Laki-Laki", "Perempuan"]
                },
                {
                    label: "Hubungan Keluarga",
                    type: "text",
                    placeholder: "Hubungan dengan Jemaah"
                }
            ];

            // Membuat div dengan class "row mt-2" untuk setiap rombongan
            const rombonganDiv = document.createElement("div");
            rombonganDiv.className = "row mt-2";

            for (const fieldData of rombonganFields) {
                // Membuat div dengan class "col-md-6" untuk setiap input
                const colDiv = document.createElement("div");
                colDiv.className = "col-md-6 mt-2";

                const label = document.createElement("label");
                label.textContent = fieldData.label;
                label.className = ""; // Anda dapat menambahkan class sesuai kebutuhan

                if (fieldData.type === "radio") {
                    // Jika jenis input adalah radio button, buat div untuk mengelompokkan radio button
                    const radioDiv = document.createElement("div");
                    // radioDiv.className = "form-check";

                    for (const option of fieldData.options) {
                        const radioInput = document.createElement("input");
                        radioInput.type = "radio";
                        radioInput.name = `rombongan_${i}_jenis_kelamin`;
                        radioInput.value = option;
                        radioInput.className = "form-check-input";

                        const optionLabel = document.createElement("label");
                        optionLabel.textContent = option;
                        optionLabel.className = "form-check-label ml-2";

                        // Menambahkan jarak margin-right antara opsi "Laki-Laki" dan "Perempuan"
                        if (option === "Laki-Laki") {
                            optionLabel.style.marginRight = "10rem";
                        }

                        radioDiv.appendChild(radioInput);
                        radioDiv.appendChild(optionLabel);
                    }

                    colDiv.appendChild(label);
                    colDiv.appendChild(radioDiv);
                } else {
                    const input = document.createElement("input");
                    input.type = fieldData.type;
                    input.placeholder = fieldData.placeholder;
                    input.name = `rombongan_${i}_${fieldData.label.toLowerCase().replace(" ", "_")}`;
                    input.className = "form-control"; // Tambahkan class "form-control" ke input

                    colDiv.appendChild(label);
                    colDiv.appendChild(input);
                }

                rombonganDiv.appendChild(colDiv);
            }

            const rombonganPhotoFields = ["Foto", "Foto KTP", "Paspor"];
            for (const field of rombonganPhotoFields) {
                // Membuat div dengan class "col-md-6" untuk setiap input
                const colDiv = document.createElement("div");
                colDiv.className = "col-md-6";

                const label = document.createElement("label");
                label.textContent = field;
                label.className = ""; // Anda dapat menambahkan class sesuai kebutuhan

                const input = document.createElement("input");
                input.type = "file";
                input.name = `rombongan_${i}_${field.toLowerCase().replace(" ", "_")}`;
                input.className = "form-control"; // Tambahkan class "form-control" ke input

                colDiv.appendChild(label);
                colDiv.appendChild(input);

                rombonganDiv.appendChild(colDiv);
            }

            rombonganForm.appendChild(rombonganDiv);
            rombonganForm.appendChild(document.createElement("br"));
        }
    });
</script>



<?= $this->endSection(); ?>