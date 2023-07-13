<?php require_once("auth.php");?>
<div class="dash-content">
        <div class="overview">
        <div class="title">
            <h1 class="Sambut, text">Selamat Datang,</h1>
            <h1 class="namauser, text" style="font-size: 45px;"><?php echo $_SESSION["user"]["name"]?></h1>
          </div>
          <div class="title">
            <i class="bx bxs-bar-chart-alt-2"></i>
            <span class="text">Total Kegiatan</span>
          </div>

          <div class="boxes">
            <div class="box box1">
              <i class="bx bxs-pencil"></i>
              <span class="text">Tugas Belajar</span>
              <span class="number">26</span>
            </div>
            <div class="box box2">
              <i class="bx bx-task"></i>
              <span class="text">Ujian</span>
              <span class="number">34</span>
            </div>
            <div class="box box3">
              <i class="bx bx-book-reader"></i>
              <span class="text">Literasi</span>
              <span class="number">30</span>
            </div>
          </div>
        </div>

        <div class="activity">
          <div class="title">
            <i class="uil uil-clock-three"></i>
            <span class="text">Aktivitas Sebelumnya</span>
          </div>
          <div class="activity-data">
            <div class="data names">
              <span class="data-title">Tanggal</span>
              <span class="data-list">05 April 2023</span>
              <span class="data-list">04 April 2023</span>
              <span class="data-list">03 April 2023</span>
              <span class="data-list">31 Maret 2023</span>
              <span class="data-list">30 Maret 2023</span>
              <span class="data-list">29 Maret 2023</span>
              <span class="data-list">28 Maret 2023</span>
              <span class="data-list">27 Maret 2023</span>
            </div>
            <div class="data email">
              <span class="data-title">Aktivitas</span>
              <span class="data-list">PSTS PPKn</span>
              <span class="data-list">PSTS Ekonomi</span>
              <span class="data-list">PSTS Bahasa Indonesia</span>
              <span class="data-list">PSTS Kimia</span>
              <span class="data-list">PSTS Matematika</span>
              <span class="data-list">PSTS Bahasa Inggris</span>
              <span class="data-list">PSTS Fisika</span>
              <span class="data-list">PSTS Biologi</span>
            </div>
            <div class="data joined">
              <span class="data-title">Aktivitas</span>
              <span class="data-list">PSTS Seni Rupa</span>
              <span class="data-list">PSTS Bahasa Jawa</span>
              <span class="data-list">PSTS Sosiologi</span>
              <span class="data-list">PSTS Penjasorkes</span>
              <span class="data-list">PSTS Agama</span>
              <span class="data-list">PSTS Informatika</span>
              <span class="data-list">PSTS Sejarah</span>
              <span class="data-list">PSTS Geografi</span>
            </div>
            <div class="data type">
              <span class="data-title">Type</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
              <span class="data-list">Ujian</span>
            </div>
            <div class="data status">
              <span class="data-title">Status</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
              <span class="data-list">Selesai</span>
            </div>
          </div>
        </div>
      </div>