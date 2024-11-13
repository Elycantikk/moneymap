<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pemasukan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 650px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1976D2;
            text-align: center;
            margin-bottom: 30px;
        }
        .content-box {
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        form h3 {
            margin-bottom: 15px;
            color: #1565C0;
        }
        input[type="text"], input[type="number"], input[type="date"] {
            padding: 12px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #90CAF9;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            padding: 12px 24px;
            background-color: #1976D2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1565C0;
        }
        .total-saldo {
            font-size: 24px;
            color: #1976D2;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .riwayat-pemasukan {
            margin-top: 30px;
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 10px;
        }
        .riwayat-pemasukan table {
            width: 100%;
            border-collapse: collapse;
        }
        .riwayat-pemasukan table th, .riwayat-pemasukan table td {
            padding: 10px;
            border: 1px solid #90CAF9;
            text-align: left;
        }
        .riwayat-pemasukan table th {
            background-color: #1976D2;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Menu Pemasukan</h2>

    <!-- Menampilkan saldo awal yang terupdate -->
    <div class="total-saldo">
        <p>Saldo Awal Terupdate: <span id="saldoAwalTerupdate">Rp 0</span></p>
    </div>

    <!-- Form untuk input pemasukan -->
    <div class="content-box">
        <form id="pemasukanForm">
            <h3>Pemasukan</h3>
            <label for="tanggalPemasukan">Pilih Tanggal Pemasukan:</label><br>
            <input type="date" id="tanggalPemasukan" name="tanggalPemasukan" required><br>
            
            <label for="deskripsiPemasukan">Deskripsi Pemasukan:</label><br>
            <input type="text" id="deskripsiPemasukan" name="deskripsiPemasukan" required><br>
            
            <label for="pemasukan">Masukkan jumlah Pemasukan:</label><br>
            <input type="number" id="pemasukan" name="pemasukan" required><br>
            
            <button type="button" onclick="tambahPemasukan()">Tambah Pemasukan</button>
        </form>
    </div>

    <div class="total-saldo">
        <p>Total Saldo: <span id="totalSaldo">Rp 0</span></p>
    </div>

    <!-- Riwayat Pemasukan -->
    <div class="riwayat-pemasukan">
        <h3>Riwayat Pemasukan</h3>
        <table id="riwayatTable">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Pemasukan (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data riwayat pemasukan akan muncul di sini -->
            </tbody>
        </table>
    </div>
</div>

<script>
    let saldoAwal = 0;
    let pemasukanData = [];
    let totalSaldo = 0;

    // Fungsi untuk menambah saldo awal
    function tambahSaldoAwal(saldo) {
        saldoAwal += saldo;
        totalSaldo += saldo;
        updateSaldoDisplay();
    }

    // Fungsi untuk menambah pemasukan
    function tambahPemasukan() {
        let pemasukanInput = document.getElementById('pemasukan').value;
        let tanggalPemasukanInput = document.getElementById('tanggalPemasukan').value;
        let deskripsiPemasukanInput = document.getElementById('deskripsiPemasukan').value;

        if (pemasukanInput === '' || pemasukanInput <= 0 || tanggalPemasukanInput === '' || deskripsiPemasukanInput === '') {
            alert('Masukkan pemasukan, deskripsi, dan tanggal yang valid.');
            return;
        }

        pemasukanData.push({
            tanggal: tanggalPemasukanInput,
            deskripsi: deskripsiPemasukanInput,
            pemasukan: parseFloat(pemasukanInput)
        });

        totalSaldo += parseFloat(pemasukanInput);

        // Menambahkan data pemasukan ke tabel riwayat
        let row = document.createElement('tr');
        row.innerHTML = `<td>${tanggalPemasukanInput}</td><td>${deskripsiPemasukanInput}</td><td>Rp ${parseFloat(pemasukanInput).toLocaleString()}</td>`;
        document.querySelector('#riwayatTable tbody').appendChild(row);

        document.getElementById('pemasukan').value = '';
        document.getElementById('tanggalPemasukan').value = '';
        document.getElementById('deskripsiPemasukan').value = '';

        updateSaldoDisplay();
    }

    // Fungsi untuk memperbarui tampilan saldo
    function updateSaldoDisplay() {
        // Menampilkan saldo awal yang terupdate
        document.getElementById('saldoAwalTerupdate').innerHTML = 'Rp ' + saldoAwal.toLocaleString();

        // Menampilkan total saldo
        document.getElementById('totalSaldo').innerHTML = 'Rp ' + totalSaldo.toLocaleString();
    }

    // Misalnya saldo awal ditambah manual
    tambahSaldoAwal(500000); // Menambahkan saldo awal Rp 500.000
</script>

</body>
</html>
