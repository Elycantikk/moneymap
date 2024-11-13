<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo Awal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1976D2;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="number"], input[type="date"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #90CAF9;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #1976D2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #1565C0;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            text-align: left;
        }
        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #e3f2fd;
        }
        .no-data {
            text-align: center;
            color: #888;
            font-style: italic;
        }
        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Saldo Awal</h2>

    <!-- Form untuk input saldo awal dan tanggal -->
    <form id="saldoForm">
        <label for="tanggal">Pilih Tanggal:</label><br>
        <input type="date" id="tanggal" name="tanggal" required><br>
        
        <label for="saldo">Masukkan Saldo Awal:</label><br>
        <input type="number" id="saldo" name="saldo" required><br>
        
        <button type="button" onclick="tambahSaldo()">Tambah Saldo</button>
    </form>

    <!-- Tabel untuk menampilkan saldo yang tersimpan -->
    <h3>Daftar Saldo</h3>
    <table id="saldoTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Saldo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data saldo akan ditambahkan di sini -->
            <tr class="no-data" id="noDataRow">
                <td colspan="4">Belum ada data saldo.</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let saldoData = [];
    let saldoTableBody = document.getElementById('saldoTable').getElementsByTagName('tbody')[0];
    let noDataRow = document.getElementById('noDataRow');

    function tambahSaldo() {
        // Ambil nilai saldo dan tanggal dari form
        let saldoInput = document.getElementById('saldo').value;
        let tanggalInput = document.getElementById('tanggal').value;

        // Validasi input
        if (saldoInput === '' || saldoInput <= 0 || tanggalInput === '') {
            alert('Masukkan nilai saldo yang valid dan pilih tanggal.');
            return;
        }

        // Tambahkan saldo dan tanggal ke dalam array saldoData
        saldoData.push({
            tanggal: tanggalInput,
            saldo: parseFloat(saldoInput)
        });

        // Bersihkan input form
        document.getElementById('saldo').value = '';
        document.getElementById('tanggal').value = '';

        // Tampilkan data saldo di tabel
        tampilkanSaldo();
    }

    function tampilkanSaldo() {
        // Bersihkan tabel sebelum menampilkan data baru
        saldoTableBody.innerHTML = '';

        if (saldoData.length === 0) {
            saldoTableBody.appendChild(noDataRow); // Menampilkan baris "belum ada data"
        } else {
            noDataRow.style.display = 'none'; // Menyembunyikan baris "belum ada data"
            saldoData.forEach((data, index) => {
                let row = saldoTableBody.insertRow();
                let cellNo = row.insertCell(0);
                let cellTanggal = row.insertCell(1);
                let cellSaldo = row.insertCell(2);
                let cellAksi = row.insertCell(3);

                cellNo.innerHTML = index + 1;
                cellTanggal.innerHTML = new Date(data.tanggal).toLocaleDateString();
                cellSaldo.innerHTML = 'Rp ' + data.saldo.toLocaleString();

                // Tombol Hapus
                let deleteButton = document.createElement('button');
                deleteButton.textContent = 'Hapus';
                deleteButton.classList.add('delete-btn');
                deleteButton.onclick = function () {
                    hapusSaldo(index); // Panggil fungsi hapusSaldo ketika tombol ditekan
                };

                cellAksi.appendChild(deleteButton);
            });
        }
    }

    function hapusSaldo(index) {
        // Hapus data saldo berdasarkan index
        saldoData.splice(index, 1);

        // Tampilkan data saldo yang baru
        tampilkanSaldo();
    }
</script>

</body>
</html>
