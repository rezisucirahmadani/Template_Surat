<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docu Archive - Template Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .header {
            background: linear-gradient(45deg, #00b4d8, #0077b6);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .logout-btn {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #e04343;
        }

        .content {
            padding: 30px;
            margin-top: 20px;
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th,
        .table-container td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table-container th {
            background-color: #0077b6;
            color: white;
        }

        .table-container tbody tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        .table-container tbody tr:hover {
            background-color: #e0f7fa;
        }

        .btn-pilih {
            background-color: #0077b6;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-pilih:hover {
            background-color: #005f73;
        }

        .btn-add {
            background-color: #f4d35e;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            display: inline-block;
            text-decoration: none;
        }

        .btn-add:hover {
            background-color: #e09c36;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Daftar Format Surat</h2>
        <a href="tanda_tangan.blade.php" class="btn-add">Buat Tanda Tangan</a>
        <a href="login.php" class="logout-btn">Logout</a>
    </div>

    <div class="content">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Template</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Surat Undangan</td>
                        <td>
                            <form action="surat_undangan.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Surat Peringatan</td>
                        <td>
                            <form action="surat_SP.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Surat Pemberitahuan</td>
                        <td>
                            <form action="surat_pemberitahuan.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Surat Permohonan Kerja Sama</td>
                        <td>
                            <form action="surat_permohonan_kerjasama.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Surat Mutasi</td>
                        <td>
                            <form action="surat_mutasi.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Surat Perintah</td>
                        <td>
                            <form action="surat_perintah.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Surat Mutasi</td>
                        <td>
                            <form action="surat_mutasi.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Permohonan Cuti Kerja</td>
                        <td>
                            <form action="permohonan_cuti.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Surat Perjanjian Karyawan</td>
                        <td>
                            <form action="perjanjian_karyawan.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Surat Undur Diri</td>
                        <td>
                            <form action="surat_undurdiri.blade.php" method="GET">
                                <button type="submit" class="btn-pilih">Pilih</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
