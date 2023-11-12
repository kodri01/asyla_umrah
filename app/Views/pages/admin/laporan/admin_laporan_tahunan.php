<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    <div class="row justify-content-between">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="input-group mb-3 w-50">
                <label class="input-group-text" for="inputGroupSelect01"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                    </svg> &nbsp;<strong>Print</strong></label>
                <select class="form-select" id="inputGroupSelect01">
                </select>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Tahun</th>
                <th class="text-center">Nama Jemaah</th>
                <th class="text-center">Tipe Paket</th>
                <th class="text-center">Tanggal Berangkat</th>
                <th class="text-center">Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($jemaah as $item) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?= date('d F Y', strtotime($item->created_at)); ?>
                    </td>
                    <td class="text-capitalize"><?= $item->nama_jemaah; ?><br>
                        <?php foreach ($rombongan as $rom) : ?>
                            <?php if ($rom->id_jemaah == $item->id_user) : ?>
                                <?= $rom->nama_anggota; ?><br>
                            <?php else : ?>
                                <p></p>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </td>
                    </td>
                    <td><?= $item->tipe; ?></td>
                    <td>
                        <?= date('d F Y', strtotime($item->tgl_berangkat)); ?>
                    </td>
                    <td>
                        <?= date('d F Y', strtotime($item->tgl_kembali)); ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>

<script>
    // Function to extract unique years from the "created_at" dates
    function getUniqueYears() {
        const tableRows = document.querySelectorAll("tbody tr");
        const uniqueYears = new Set();

        tableRows.forEach(row => {
            const createdAtCell = row.querySelector("td:nth-child(2)");
            const createdAtDate = new Date(createdAtCell.textContent);
            const year = createdAtDate.getFullYear();
            uniqueYears.add(year);
        });

        const sortedYears = Array.from(uniqueYears).sort((a, b) => a - b);
        return sortedYears;
    }

    // Function to populate the dropdown options with unique years
    function populateDropdownOptions() {
        const selectElement = document.getElementById("inputGroupSelect01");
        const years = getUniqueYears();

        selectElement.innerHTML = ""; // Clear existing options

        const allYearOption = document.createElement("option");
        allYearOption.value = "All Year";
        allYearOption.textContent = "All Year";
        selectElement.appendChild(allYearOption);

        years.forEach(year => {
            const option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            selectElement.appendChild(option);
        });
    }

    // Function to handle the print button click event
    function handlePrintButtonClick() {
        const selectedYear = document.getElementById("inputGroupSelect01").value;

        if (selectedYear === "All Year") {
            // Redirect to the print URL directly without appending the selected year
            window.location.href = "/admin/cetak_tahunan/?tahun=All Year";
        } else {
            let printURL = "/admin/cetak_tahunan";
            // Append the selected year to the print URL
            // Encode the selected year to handle special characters
            printURL += `?tahun=${encodeURIComponent(selectedYear)}`;

            // Redirect to the print URL with the selected year
            window.location.href = printURL;
        }
    }

    // Attach the function to the "change" event of the dropdown
    document.getElementById("inputGroupSelect01").addEventListener("change", handlePrintButtonClick);

    // Call the function initially to populate the dropdown with unique years
    populateDropdownOptions();
</script>

<?= $this->endSection(); ?>