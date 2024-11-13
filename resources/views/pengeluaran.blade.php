<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pengeluaran</title>
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
        input[type="number"], input[type="date"] {
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
        .riwayat-pengeluaran {
            margin-top: 30px;
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 10px;
        }
        .riwayat-pengeluaran table {
            width: 100%;
            border-collapse: collapse;
        }
        .riwayat-pengeluaran table th, .riwayat-pengeluaran table td {
            padding: 10px;
            border: 1px solid #90CAF9;
            text-align: left;
        }
        .riwayat-pengeluaran table th {
            background-color: #1976D2;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Menu Pengeluaran</h2>

    <!-- Menampilkan saldo awal yang terupdate -->
    <div class="total-saldo">
        <p>Saldo Awal Terupdate: <span id="saldoAwalTerupdate">Rp 0</span></p>
    </div>

    <!-- Form untuk input pengeluaran -->
    <div class="content-box">
        <form id="pengeluaranForm">
            <h3>Pengeluaran</h3>
            <label for="tanggalPengeluaran">Pilih Tanggal Pengeluaran:</label><br>
            <input type="date" id="tanggalPengeluaran" name="tanggalPengeluaran" required><br>
            
            <label for="pengeluaran">Masukkan Pengeluaran:</label><br>
            <input type="number" id="pengeluaran" name="pengeluaran" required><br>
            
            <button type="button" onclick="tambahPengeluaran()">Tambah Pengeluaran</button>
        </form>
    </div>

    <div class="total-saldo">
        <p>Total Saldo: <span id="totalSaldo">Rp 0</span></p>
    </div>

    <!-- Riwayat Pengeluaran -->
    <div class="riwayat-pengeluaran">
        <h3>Riwayat Pengeluaran</h3>
        <table id="riwayatPengeluaranTable">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pengeluaran (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data riwayat pengeluaran akan muncul di sini -->
            </tbody>
        </table>
    </div>
</div>

<script>
    let saldoAwal = 0;
    let pemasukanData = [];
    let pengeluaranData = [];
    let totalSaldo = 0;

    // Ambil saldo awal dari sessionStorage atau localStorage (sesuai kebutuhan)
    if (localStorage.getItem('saldoAwal')) {
        saldoAwal = parseFloat(localStorage.getItem('saldoAwal'));
    }

    function updateSaldoDisplay() {
        // Menampilkan saldo awal yang terupdate
        document.getElementById('saldoAwalTerupdate').innerHTML = 'Rp ' + saldoAwal.toLocaleString();

        // Menampilkan total saldo
        document.getElementById('totalSaldo').innerHTML = 'Rp ' + totalSaldo.toLocaleString();
    }

    // Fungsi untuk menambah pengeluaran
    function tambahPengeluaran() {
        let pengeluaranInput = document.getElementById('pengeluaran').value;
        let tanggalPengeluaranInput = document.getElementById('tanggalPengeluaran').value;

        if (pengeluaranInput === '' || pengeluaranInput <= 0 || tanggalPengeluaranInput === '') {
            alert('Masukkan pengeluaran yang valid dan pilih tanggal.');
            return;
        }

        // Menambahkan data pengeluaran
        pengeluaranData.push({
            tanggal: tanggalPengeluaranInput,
            pengeluaran: parseFloat(pengeluaranInput)
        });

        // Mengurangi saldo dengan pengeluaran yang dimasukkan
        saldoAwal -= parseFloat(pengeluaranInput);
        totalSaldo -= parseFloat(pengeluaranInput);

        // Menambahkan data pengeluaran ke tabel riwayat
        let row = document.createElement('tr');
        row.innerHTML = `<td>${tanggalPengeluaranInput}</td><td>Rp ${parseFloat(pengeluaranInput).toLocaleString()}</td>`;
        document.querySelector('#riwayatPengeluaranTable tbody').appendChild(row);

        // Reset form
        document.getElementById('pengeluaran').value = '';
        document.getElementById('tanggalPengeluaran').value = '';

        updateSaldoDisplay();
    }

    // Misalnya saldo awal sudah ditambah sebelumnya (contohnya Rp 5.000.000)
    // Di sini saldo awal akan berkurang jika pengeluaran ditambahkan
    updateSaldoDisplay();
</script>

</body>
</html>
