<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - Sistem Manajemen Mahasiswa</title>
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
            max-width: 600px;
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
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .input-group-text {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px 0 0 10px;
        }
        .input-group .form-control {
            border-radius: 0 10px 10px 0;
        }
        .btn-submit {
            background: linear-gradient(45deg, #28a745, #20c997);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            width: 100%;
            margin-bottom: 1rem;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
            color: white;
        }
        .btn-back {
            background: linear-gradient(45deg, #6c757d, #495057);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
            width: 100%;
            display: inline-block;
            text-align: center;
        }
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
            color: white;
        }
        .form-floating {
            margin-bottom: 1.5rem;
        }
        .form-floating > .form-control {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }
        .form-floating > label {
            padding: 1rem;
            color: #6c757d;
        }
        @media (max-width: 768px) {
            .main-container {
                margin: 1rem;
                padding: 1rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="main-container">
                    <!-- Header Section -->
                    <div class="header-section">
                        <h1 class="header-title">
                            <i class="fas fa-user-plus me-3"></i>
                            Tambah Mahasiswa
                        </h1>
                        <p class="header-subtitle">Masukkan data mahasiswa baru</p>
                    </div>

                    <!-- Form Container -->
                    <div class="form-container">
                        <form method="POST" id="mahasiswaForm">
                            <!-- NIM Field -->
                            <div class="form-floating mb-3">
                                <input type="text" 
                                       class="form-control" 
                                       id="nim" 
                                       name="nim" 
                                       placeholder="Masukkan NIM"
                                       required
                                       pattern="[0-9]+"
                                       title="NIM harus berupa angka">
                                <label for="nim">
                                    <i class="fas fa-id-card me-2"></i>
                                    Nomor Induk Mahasiswa (NIM)
                                </label>
                            </div>

                            <!-- Nama Field -->
                            <div class="form-floating mb-3">
                                <input type="text" 
                                       class="form-control" 
                                       id="nama" 
                                       name="nama" 
                                       placeholder="Masukkan nama lengkap"
                                       required
                                       minlength="2"
                                       title="Nama minimal 2 karakter">
                                <label for="nama">
                                    <i class="fas fa-user me-2"></i>
                                    Nama Lengkap
                                </label>
                            </div>

                            <!-- Jurusan Field -->
                            <div class="form-floating mb-4">
                                <input type="text" 
                                       class="form-control" 
                                       id="jurusan" 
                                       name="jurusan" 
                                       placeholder="Masukkan jurusan"
                                       required
                                       minlength="2"
                                       title="Jurusan minimal 2 karakter">
                                <label for="jurusan">
                                    <i class="fas fa-graduation-cap me-2"></i>
                                    Jurusan
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-save me-2"></i>
                                Simpan Data Mahasiswa
                            </button>

                            <!-- Back Button -->
                            <a href="index.php" class="btn-back">
                                <i class="fas fa-arrow-left me-2"></i>
                                Kembali ke Daftar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form validation and enhancement
        document.getElementById('mahasiswaForm').addEventListener('submit', function(e) {
            const nim = document.getElementById('nim').value;
            const nama = document.getElementById('nama').value;
            const jurusan = document.getElementById('jurusan').value;

            // Additional validation
            if (nim.length < 8) {
                e.preventDefault();
                alert('NIM harus minimal 8 digit');
                return false;
            }

            if (nama.trim().length < 2) {
                e.preventDefault();
                alert('Nama harus minimal 2 karakter');
                return false;
            }

            if (jurusan.trim().length < 2) {
                e.preventDefault();
                alert('Jurusan harus minimal 2 karakter');
                return false;
            }

            // Show loading state
            const submitBtn = this.querySelector('.btn-submit');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Menyimpan...';
            submitBtn.disabled = true;
        });

        // Auto-format NIM input (numbers only)
        document.getElementById('nim').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // Auto-capitalize nama and jurusan
        document.getElementById('nama').addEventListener('input', function(e) {
            this.value = this.value.replace(/\b\w/g, l => l.toUpperCase());
        });

        document.getElementById('jurusan').addEventListener('input', function(e) {
            this.value = this.value.replace(/\b\w/g, l => l.toUpperCase());
        });
    </script>
</body>
</html>
