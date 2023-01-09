<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Unit Kegiatan Mahasiswa<br>universitas pamulang</h1>
      <h2>Unit Kegiatan Mahasiswa adalah lembaga kemahasiswaan tempat bergabungnya para mahasiswa yang memiliki kesamaan minat, kegemaran, kreativitas, dan orientasi aktivitas penyaluran kegiatan ekstrakulikuler di dalam kampus.</h2>
      <a href="#contact" class="btn-get-started">Jelajahi kami</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">DAFTAR SEKARANG</h3>
        </div>
      </div>
      <form class="php-email-form" id="register">
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="form">
                <div class="form-group">
                  <input type="number" name="nim" class="form-control" id="nim" placeholder="NIM" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="NAMA LENGKAP" required>
                </div><br>
                <h6 class="section-title">JENIS KELAMIN</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                  <label class="form-check-label" for="laki-laki">
                    LAKI-LAKI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                  <label class="form-check-label" for="perempuan">
                    PEREMPUAN
                  </label>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="prodi" id="prodi" placeholder="PROGRAM STUDI" required>
                </div><br>
                <h6 class="section-title">UKM YANG AKAN DIIKUTI</h6>
                <select class="form-select" aria-label="Default select example" name="UKM">
                  <option selected>---PILIH SALAH SATU---</option>
                  <option value="tari">SENI TARI</option>
                  <option value="taekwondo">TAEKWONDO</option>
                  <option value="musik">MUSIK</option>
                  <option value="basket">BASKET</option>
                  <option value="tenis">TENIS MEJA</option>
                </select>

                <br>
                <h6 class="section-title">HARI KEGIATAN</h6>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="senin" id="senin" name="hari">
                  <label class="form-check-label" for="senin">
                    SENIN
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="selasa" id="selasa" name="hari">
                  <label class="form-check-label" for="selasa">
                    SELASA
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="rabu" id="rabu" name="hari">
                  <label class="form-check-label" for="rabu">
                    RABU
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="kamis" id="kamis" name="hari">
                  <label class="form-check-label" for="kamis">
                    KAMIS
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="jumat" id="jumat" name="hari">
                  <label class="form-check-label" for="jumat">
                    JUM'AT
                  </label>
                </div>
                <br><br>
                
                <button type="submit" class="btn btn-outline-success" onclick="submitForm()">SIMPAN</button>
                <button type="button" onclick="deleteForm()" class="btn btn-outline-danger">BATAL</button>

            </div>
          

        </div>
      </div>
      </form>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?= $this->endSection(); ?>