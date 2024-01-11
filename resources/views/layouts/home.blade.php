@extends('layouts.main')

@section('banner')
    <!-- BANNER -->
        <div class="container-fluid homeJumbotron">
            <div class="container d-flex flex-column mt-5 pt-5">
                <h1 class="display-5 fw-bold col-5 mt-5 pt-5">CARI MOBIL UNTUK KENYAMANAN <br>ANDA.</h1>
                <p class="col-5 mt-3 fs-4">
                KAMI MEMPUNYAI BEBERAPA PILIHAN <br>UNTUK ANDA.
                </p>
                <a href="" class="tombolSelengkapnya d-flex align-items-center justify-content-center">SELENGKAPNYA<i class="uil uil-arrow-circle-right ms-2"></i></a>
            </div>
        </div>
    <!-- END BANNER -->



    <h2 class="container text-center mt-5 pt-5">Mobil Untuk Anda</h2>
    <div class="container mt-5">
        <div class="row gx-5">
            {{-- SEARCH BOX --}}
            <div class="col-lg-3 col-md-12 searchBox p-3 py-5 mt-3">
                <h3><i class="uil uil-filter"></i>Cari Mobil</h3>
                <form action="">
                    <div class="input-group mt-5 mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Pilih Merek</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis Bahan Bakar</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <button class="buttonCari p-2">
                        <i class="uil uil-search"></i> Cari
                    </button>
                </form>
            </div>



            {{-- LIST MOBIL --}}
            <div class="col-lg-8 col-md-12 listMobil ms-lg-3 mt-3">
                <div class="row">
                    <div class="jumlahMobil d-flex align-items-center p-3">
                        1 Mobil
                    </div>
                </div>


                <div class="row cardMobil mt-3">
                    <div class="col">
                        <img src="img/mobil1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col p-3">
                        <h1 class="merekMobil fw-3">Honda, hondafreed</h1>
                        <p class="hargaMobil">Rp. 450.000 / Hari</p>
                        <div class="row my-3 infoMobil">
                            <div class="col"><i class="uil uil-user me-2"></i>6 Seats</div>
                            <div class="col"><i class="uil uil-pump me-2"></i>Bensin</div>
                            <div class="col"></div>
                        </div>
                        <a href="" class="lihatDetilKendaraan py-2 px-3 mt-4">
                            Lihat Detil <i class="uil uil-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </div>

    {{-- FOOTER --}}




  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

@endsection

