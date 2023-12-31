<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <form class="d-flex mb-3">
        <input type="search" autocomplete="off" name="search" id="searchInput" class="form-control me-2 w-50" placeholder="Masukan Nama Jemaah">
        <a class="btn btn-success" href="#" id="searchButton"><i class="fas fa-plus"></i>Cari Data</a>
    </form>

    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center ">No</th>
            <th class="text-center ">Nama Jemaah</th>
            <th class="text-center ">Tanggal Daftar</th>
            <th class="text-center ">Tipe Paket</th>
            <th class="text-center ">Kelengkapan Berkas</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($jemaah as $item) : ?>
            <td><?= $no++ ?></td>
            <td class="text-capitalize"><?php echo $item->nama_jemaah; ?><br>
                <?php foreach ($rombongan as $rom) : ?>
                    <?php if ($rom->id_jemaah == $item->id_user) : ?>
                        <?= $rom->nama_anggota; ?><br>
                    <?php else : ?>
                        <p></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </td>
            <td><?php echo date('d F Y', strtotime($item->created_at)); ?></td>
            <td><?php echo $item->tipe; ?></td>
            <td>
                <?php echo ($item->status == 0) ? "Belum Verifikasi" : "Berkas sudah Lengkap"; ?>
            </td>
            <td>
                <center>
                    <form action="/admin/jemaah/update/<?= $item->id ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <button class="btn btn-sm btn-success" type="submit">Verifikasi</button>
                    </form>
                    <a class="btn btn-sm btn-primary" href="/admin/jemaah/details/<?= $item->id ?>">Details</a>
                    <form action="/admin/jemaah/<?= $item->id ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" type="submit">Delete</button>
                    </form>

                </center>
            </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');

        searchButton.addEventListener('click', function(event) {
            event.preventDefault();

            const searchText = searchInput.value.trim().toLowerCase();
            const rows = document.querySelectorAll('table tr');

            for (const row of rows) {
                const namaCell = row.querySelector('td:nth-child(2)'); // Kolom Nama

                if (namaCell) {
                    const nama = namaCell.textContent.trim().toLowerCase();
                    if (nama.includes(searchText)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        });
    });
</script>


<?= $this->endSection(); ?>