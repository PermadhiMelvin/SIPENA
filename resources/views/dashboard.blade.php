@extends('layouts.main')

@section('content')
    \

    @if ($role == 'user')
        {{--  <!-- ======= Top Bar ======= -->  --}}
        <section class="d-flex align-items-center background-animate">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <h2 class="text-white">Selamat Datang **** !</h2>
            </div>
        </section>

        <main id="main">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-white" style="color:white; background-color:#5CB874">
                                    Perhatian
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Anda sudah mendapatkan ruang untuk di huni</h5>
                                    <h3 class="card-title" style="color:#5CB874">Kode ruang anda adalah : LT.2 F&94</h3>
                                </div>
                            </div>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-white bg-danger">
                                    Peringatan !
                                </div>
                                <div class="card-body text-danger">
                                    <h5 class="card-title">Anda belum melakukan pembayaran bulan ini</h5>
                                    <p class="card-text">Segera lakukan pembayaran sewa bulan ini, sekarang.</p>
                                    <a href="/#" class="btn"
                                        style="color:white; background-color:#5CB874">Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <!--kalau belum isi di awal-->  --}}
                <div class="container">
                    <div class="row">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                            class="rounded-circle mt-5" width="150px"
                                            src="assets/img/iconaccount.png"><span class="font-weight-bold">Nama
                                            Pengguna</span><span class="text-black-50">pengguna@gmail.com</span><span>
                                        </span></div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profil Saya</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                                    class="form-control" placeholder="Suparman" value="" readonly>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label class="labels">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Boyolali, 7 Desember 2002" value="" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Alamat</label>
                                                <input type="text" class="form-control" placeholder="Kedungkandang"
                                                    value="" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Pekerjaan</label>
                                                <input type="text" class="form-control" placeholder="Buruh Tani"
                                                    value="" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">No. HP</label>
                                                <input type="text" class="form-control" placeholder="08765487722"
                                                    value="" readonly>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="labels">Jumlah Anggota Keluarga</label>
                                                <input type="text" class="form-control" placeholder="5 orang"
                                                    value="" readonly>
                                            </div>
                                        </div>
                                        <div class="mt-5 text-center d-grid gap-2"><button class="btn" type="button"
                                                data-bs-toggle="modal" data-bs-target="#modalberkas"
                                                style="color:white; background-color:#5CB874">Lihat Berkas Saya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--kalau sudah isi di awal-->
                <div class="container">
                    <div class="row">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                            class="rounded-circle mt-5" width="150px"
                                            src="assets/img/iconaccount.png"><span class="font-weight-bold">Nama
                                            Pengguna</span><span class="text-black-50">pengguna@gmail.com</span><span>
                                        </span></div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profil Saya</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input type="text"
                                                    class="form-control" placeholder="" value=""></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Tempat, Tanggal Lahir</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Alamat</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Pekerjaan</label>
                                            <input type="text" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">No. HP</label>
                                            <input type="number" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Jumlah Anggota Keluarga</label>
                                            <input type="number" class="form-control" placeholder="" value="">
                                        </div>
                                        <div class="mt-5 text-center d-grid gap-2">
                                            <a href="/" class="text-center d-grid gap-2">
                                                <button class="btn" type="button"
                                                    style="color:white; background-color:#5CB874">Simpan</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        {{--  <!-- End #main -->  --}}

        <div class="modal fade" id="modalberkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <h4 class="modal-title" id="exampleModalLabel">Berkas</h4>
                            <div class="form-group">
                                <label>Surat Permohonan</label>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="xxx">
                                    <span class="input-group-append">
                                        <a href="/" data-bs-target="blank">
                                            <button class="btn" style="color:white; background-color:#5CB874"
                                                type="button">Lihat</button>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Surat Permohonan</label>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="xxx">
                                    <span class="input-group-append">
                                        <a href="/" data-bs-target="blank">
                                            <button class="btn" style="color:white; background-color:#5CB874"
                                                type="button">Lihat</button>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Surat Permohonan</label>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="xxx">
                                    <span class="input-group-append">
                                        <a href="/" data-bs-target="blank">
                                            <button class="btn" style="color:white; background-color:#5CB874"
                                                type="button">Lihat</button>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @elseif ($role == 'admin')
        {{--  <!-- ======= Top Bar ======= -->  --}}
        <section class="d-flex align-items-center background-animate">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <h2 class="text-white">Selamat Datang Admin !</h2>
            </div>
        </section>

        <main id="main">
            {{--  <!-- ======= Services Section ======= -->  --}}
            <section class="featured-services section-bg">
                <div class="container">
                    <div class="row">
                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                            class="rounded-circle mt-5" width="150px"
                                            src="assets/img/iconaccount.png"><span class="font-weight-bold">Admin Si-
                                            Pena</span><span class="text-black-50">adminsipena@gmail.com</span><span>
                                        </span></div>
                                </div>
                                <div class="col-md-9 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profil Admin</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12"><label class="labels">Nama</label><input
                                                    type="text" class="form-control" placeholder="Admin Si-Pena"
                                                    value="" readonly></div>
                                            <div class="col-md-12"><label class="labels">Email</label><input
                                                    type="text" class="form-control" value=""
                                                    placeholder="adminsipena@gmail.com" readonly></div>
                                            <div class="col-md-12"><label class="labels">Password</label><input
                                                    type="text" class="form-control" value=""
                                                    placeholder="********" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        {{--  <!-- End #main -->  --}}
    @endif
@endsection
