<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            margin: 2rem auto;
            padding: 2rem;
        }
        .header-section {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e9ecef;
        }
        .header-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .header-subtitle {
            color: #6c757d;
            font-size: 1.1rem;
        }
        .action-bar {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .btn-add {
            background: linear-gradient(45deg, #28a745, #20c997);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 1.5rem;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
            color: white;
        }
        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
            transition: all 0.2s ease;
        }
        .btn-action {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 0.2rem;
        }
        .btn-edit {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
        }
        .btn-edit:hover {
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }
        .btn-delete {
            background: linear-gradient(45deg, #dc3545, #c82333);
            color: white;
        }
        .btn-delete:hover {
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }
        .stats-card {
            background: linear-gradient(45deg, #17a2b8, #138496);
            color: white;
            border-radius: 15px;
            padding: 1rem;
            text-align: center;
            margin-bottom: 1rem;
        }
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #6c757d;
        }
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }
        @media (max-width: 768px) {
            .main-container {
                margin: 1rem;
                padding: 1rem;
            }
            .table-container {
                overflow-x: auto;
            }
            .action-bar {
                flex-direction: column;
                align-items: stretch;
            }
            .btn-add {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="main-container">
                    <!-- Header Section -->
                    <div class="header-section">
                        <h1 class="header-title">
                            <i class="fas fa-graduation-cap me-3"></i>
                            Sistem Manajemen Mahasiswa
                        </h1>
                        <p class="header-subtitle">Kelola data mahasiswa dengan mudah dan efisien</p>
                    </div>

                    <!-- Stats Card -->
                    <?php 
                    $total_mahasiswa = $result->num_rows;
                    ?>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="stats-card">
                                <i class="fas fa-users fa-2x mb-2"></i>
                                <h3><?= $total_mahasiswa ?></h3>
                                <p class="mb-0">Total Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Bar -->
                    <div class="action-bar">
                        <div>
                            <h4 class="mb-0">
                                <i class="fas fa-list me-2"></i>
                                Daftar Mahasiswa
                            </h4>
                        </div>
                        <div>
                            <a href="index.php?action=create" class="btn-add">
                                <i class="fas fa-plus me-2"></i>
                                Tambah Mahasiswa
                            </a>
                        </div>
                    </div>

                    <!-- Table Container -->
                    <div class="table-container">
                        <?php if ($total_mahasiswa > 0): ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-hashtag me-2"></i>No</th>
                                            <th><i class="fas fa-id-card me-2"></i>NIM</th>
                                            <th><i class="fas fa-user me-2"></i>Nama</th>
                                            <th><i class="fas fa-building me-2"></i>Jurusan</th>
                                            <th><i class="fas fa-cogs me-2"></i>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        $result->data_seek(0); // Reset pointer
                                        while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td><strong><?= $no++; ?></strong></td>
                                            <td>
                                                <span class="badge bg-primary"><?= htmlspecialchars($row['nim']); ?></span>
                                            </td>
                                            <td>
                                                <strong><?= htmlspecialchars($row['nama']); ?></strong>
                                            </td>
                                            <td>
                                                <i class="fas fa-graduation-cap me-2 text-muted"></i>
                                                <?= htmlspecialchars($row['jurusan']); ?>
                                            </td>
                                            <td>
                                                <a href="index.php?action=edit&id=<?= $row['id']; ?>" 
                                                   class="btn-action btn-edit" 
                                                   title="Edit Data">
                                                    <i class="fas fa-edit me-1"></i>Edit
                                                </a>
                                                <a href="index.php?action=delete&id=<?= $row['id']; ?>" 
                                                   class="btn-action btn-delete" 
                                                   onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa <?= htmlspecialchars($row['nama']); ?>?')"
                                                   title="Hapus Data">
                                                    <i class="fas fa-trash me-1"></i>Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="empty-state">
                                <i class="fas fa-inbox"></i>
                                <h4>Belum Ada Data Mahasiswa</h4>
                                <p>Silakan tambahkan data mahasiswa pertama Anda</p>
                                <a href="index.php?action=create" class="btn-add">
                                    <i class="fas fa-plus me-2"></i>
                                    Tambah Mahasiswa Pertama
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
