@extends('layouts.main')

@section('content')
    {{--  <!-- ======= Hero Section ======= -->  --}}
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                Selamat Datang di
                            </h2>
                            <h2 class="animate__animated animate__fadeInDown">
                                <span> SI - PENA</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                Sistem Informasi Pembayaran Sewa Rusunawa Kota Malang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  <!-- End Hero -->  --}}

    <main id="main">

        {{--  <!-- ======= Services Section ======= -->  --}}
        <section id="informasi" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Informasi</h2>
                </div>

                <div class="row">
                    <div class="section-card">
                        <p>Rumah susun sederhana sewa (RUSUNAWA) Pemerintah Kota Malang, dalam hal ini di bawah naungan
                            Dinas Pekerjaan Umum Penataan Ruang, Perumahan dan Kawasan Permukiman (DPUPRPKP) Kota Malang,
                            merupakan bangunan gedung bertingkat, lingkungan yang terbagi dalam bagian-bagian yang di
                            strukturkan secara fungsional dalam arah horizontal maupun vertikal, dan merupakan satu kesatuan
                            yang masing-masing digunakan secara terpisah dalam status penguasaan sewanya.</p>
                        <p>Ada 2 gedung bangunan RUSUNAWA yang dikelolah oleh DPUPRPKP Kota Malang, RUSUNAWA 1 di jalan
                            Mayjen Sungkono, Buring, Kec. Kedungkandang, sebelah selatan jembatan Kedungkandang arah barat,
                            dan RUSUNAWA 2 di jalan Simpang Gading, Buring, nomer 01 belakang GOR Ken Arok Kec.
                            Kedungkandang, Kota Malang, Jawa Timur 65135</p>
                        <p>Bangunan RUSUNAWA ini mempunyai fasilitas umum yakni ruang serba guna, mushola, ruang komersil,
                            ruang parkir motor, ruang panel, ruang pengelola, gedung, ruang penjaga, selain itu juga ada
                            ruang hunian bagi difabel di lantai 1. Tiap hunian terdiri dari ruang tamu, kamar tidur, kamar
                            mandi/wc, dapur dan jemuran.</p>
                        <div style="color: green;">
                            <p>Adapun yang berhak menjadi penghuni RUSUNAWA DPUPRPKP Kota Malang adalah dengan syarat
                                sebagai berikut :</p>
                            <p>&#8211; MBR (Masyarakat berpenghasilan rendah).</p>
                            <p>&#8211; KTP kota Malang</p>
                            <p>&#8211; Sudah berkeluarga</p>
                            <p>&#8211; Surat keterangan belum memiliki Rumah</p>
                            <p>Untuk memudahkan informasi pelayanan bagi penghuni/calon penghuni dapat menghubungi wa center
                                0895372233322</p>
                        </div>
                    </div>
                    {{--  <embed src="assets/pdf/Panduan Penggunaan LMS SIBELA Untuk Siswa-1.pdf" width=100% height=500 type="application/pdf">        --}}
                </div>
            </div>
        </section>

        <section id="harga" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Harga Sewa</h2>
                    <p>
                        Semua tarif sewa ini belum termasuk tagihan air, listrik, dan pelayanan sampah dan pengolahan limbah
                        cair
                    </p>
                </div>

                <div class="row">
                    <div class="card-deck">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 1</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 75.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 2</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 175.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 3</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 150.000,-</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 4</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 125.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LANTAI 5</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 100.000,-</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Sewa Komersil</h5>
                                    </div>
                                    <div class="card-footer bg-succes">
                                        <h5 class="card-title" style="color:#5CB874">Rp. 500.000,-</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End Services Section -->  --}}



        <section id="lokasi" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Lokasi</h2>
                    <p>
                        Rusunawa Buring 1 Kota Malang, Jl. Mayjen Sungkono, Buring, Kec. Kedungkandang, Kota Malang, Jawa
                        Timur 65136
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0263162664046!2d112.6456875!3d-7.996219099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62873624240c9%3A0x93d39e7ea255b3f0!2sRusunawa%20Buring%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1691229318994!5m2!1sid!2sid"
                                frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  <!-- End Contact Section -->  --}}
    </main>
    {{--  <!-- End #main -->  --}}
@endsection
