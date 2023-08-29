<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laporan Bulanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* Reset margin dan padding */
        body,
        html {
            margin: 0;
            padding: 0;
        }

        /* Styling elemen-elemen di halaman cetak */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: grey;
        }

        .card {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: whitesmoke;
        }

        .identity {
            font-size: 15px;
        }

        /* Styling untuk kop surat */
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 0;
            /* Atur padding header */
            background-color: #f1f1f1;
            border-bottom: 2px solid #333;
            /* Warna latar belakang header */
        }

        .logo img {
            max-width: 100px;
            /* Atur lebar maksimum gambar */
            height: auto;
            /* Biarkan tinggi gambar menyesuaikan proporsi */
        }

        header h1,
        header p {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .tebel {
            width: 70%;
        }

        .tebel td {
            padding-right: 5px;
        }

        .tebel td:last-child {
            padding-right: 0;
            /* Remove the right padding for the last td in each row */
        }
    </style>
</head>

<body>
    <!-- Kop surat -->
    <div class="card">
        <header>
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo Perusahaan">
            </div>
            <div class="company-info" style="margin-left: 20px;">
                <h1>PT. ASYLA FATIMAH WISATA</h1>
                <p>Jln. Gatot Subroto No. 42 Kota Jambi, Jambi 36134</p>
            </div>
        </header>
        <div class="container">
            <?php
            // Ambil nilai bulan dari URL
            $bulan = $_GET['bulan'];

            // Cek apakah bulan adalah "All Month"
            $isAllMonth = ($bulan === "All Month");
            ?>
            <h3 class="my-3 text-center">Laporan Pendaftaran : <?= $bulan ?></h3>

            <table class=" table my-4 table-bordered border-dark">
                <thead class="text-center ">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Tipe Paket</th>
                        <th scope="col">Tanggal Berangkat</th>
                        <th scope="col">Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Jika bulan adalah "All Month", tampilkan semua data dari database tanpa filter
                    if ($isAllMonth) {
                        foreach ($jemaah as $item) :
                    ?>
                            <tr>
                                <td><?= date('d F Y', strtotime($item->created_at)); ?></td>
                                <td><?= $item->nama ?></td>
                                <td><?= $item->jns_kelamin; ?></td>
                                <td><?= $item->hp_jemaah; ?></td>
                                <td><?= $item->tipe; ?></td>
                                <td><?= date('d F Y', strtotime($item->tgl_berangkat)); ?></td>
                                <td><?= date('d F Y', strtotime($item->tgl_kembali)); ?></td>
                            </tr>
                        <?php
                        endforeach;
                    } else {
                        // Jika bulan bukan "All Month", filter data berdasarkan bulan dan tahun yang dipilih
                        $monthNumber = date('m', strtotime($bulan));
                        $year = date('Y', strtotime($bulan));

                        $filteredJemaah = array_filter($jemaah, function ($item) use ($monthNumber, $year) {
                            return date('m', strtotime($item->created_at)) == $monthNumber && date('Y', strtotime($item->created_at)) == $year;
                        });

                        foreach ($filteredJemaah as $item) :
                        ?>
                            <tr>
                                <td><?= date('d F Y', strtotime($item->created_at)); ?></td>
                                <td><?= $item->nama ?></td>
                                <td><?= $item->jns_kelamin; ?></td>
                                <td><?= $item->hp_jemaah; ?></td>
                                <td><?= $item->tipe; ?></td>
                                <td><?= date('d F Y', strtotime($item->tgl_berangkat)); ?></td>
                                <td><?= date('d F Y', strtotime($item->tgl_kembali)); ?></td>
                            </tr>
                    <?php
                        endforeach;
                    }
                    ?>
                </tbody>
            </table>

            <div class="sign">
                <label id="currentDateLabel" style="margin-left: 30rem;"></label><br>
                <label for="" style="margin-left: 30rem;">Pimpinan</label>
            </div>
            <div class="name">
                <label for="" style="margin-left: 30rem;margin-top:40px;">Nama Pimpinan</label>
            </div>

        </div>
    </div>
</body>
<script>
    // Get the current date
    const currentDate = new Date();

    // Array of month names
    const monthNames = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    // Format the date as "Jambi, {day} {month} {year}"
    const formattedDate =
        `Jambi, ${currentDate.getDate()} ${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

    // Update the label content
    document.getElementById("currentDateLabel").textContent = formattedDate;
</script>
<script>
    window.onload = function() {
        window.print();
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>