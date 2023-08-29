<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="carouselImg1" src="assets/img/tampilan1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img id="carouselImg2" src="assets/img/tampilan2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section>
    <div class="row mx-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AekagDgZf8g"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">LEGALITAS PT. ASYLA FATIMAH WISATA</h5>
                    <div class="d-flex">
                        <i class='bx bxs-check-circle mr-2 mt-2'></i>
                        <p>SURAT IZIN OPRASIONAL UMRAH OLEH KEMENTERIAN AGAMA REPUBLIK INDONESIA NOMOR : 662
                            TAHUN 2017
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class='bx bxs-check-circle mr-2 mt-2'></i>
                        <p>SURAT KEPUTUSAN HIMPUNAN PENYELENGGARA UMRAH DAN HAJU NOMOR REGISTRASI : 471/HIMPUH/2018
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function setCarouselImageSize() {
    var carousel = document.getElementById('carouselExampleFade');
    var carouselImages = carousel.querySelectorAll('img');
    var windowHeight = window.innerHeight;

    carouselImages.forEach(function(image) {
        // Mengatur tinggi gambar sesuai dengan tinggi layar
        image.style.height = windowHeight + 'px';

        // Mengatur lebar gambar agar sesuai dengan aspek rasio gambar
        var imageAspectRatio = image.naturalWidth / image.naturalHeight;
        var windowWidth = window.innerWidth;
        var calculatedWidth = windowHeight * imageAspectRatio;

        // Memastikan gambar tidak lebih lebar dari lebar layar
        if (calculatedWidth > windowWidth) {
            image.style.width = '100%';
            image.style.height = 'auto';
        } else {
            image.style.width = calculatedWidth + 'px';
        }
    });
}

// Panggil fungsi untuk pertama kalinya saat halaman dimuat
setCarouselImageSize();

// Panggil fungsi lagi saat ukuran layar berubah
window.addEventListener('resize', setCarouselImageSize);
</script>

<?= $this->endSection(); ?>