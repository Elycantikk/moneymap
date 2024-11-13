<div class="container-fluid">
    <div class="row">
        <!-- Saldo dan Penyapa Pengguna -->
        <div class="col-12">
            <div class="alert alert-success text-center">
                <h2>Halo Ely!, {{ Auth::user()}}!</h2>
                <p>Jangan boros boros yaaaa:D </p>
            </div>
        </div>
    </div>
  <!-- Card Saldo -->
  <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Rp. 5.000.000</h3>
                    <p>Saldo Tersedia</p>
                </div>
                <div class="icon">
                    <i class="fas fa-wallet"></i>
                </div>
                <a href="saldoawal" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Pemasukan dan Pengeluaran Terakhir -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>+Rp. 500.000</h3>
                    <p>Pemasukan Terbaru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-up"></i>
                </div>
                <a href="/pemasukan" class="small-box-footer">Lihat Semua <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>-Rp. 200.000</h3>
                    <p>Pengeluaran Terbaru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-down"></i>
                </div>
                <a href="/pengeluaran" class="small-box-footer">Lihat Semua <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

