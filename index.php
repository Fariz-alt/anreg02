<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Sederhana - Learning Management System</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: #667eea !important;
            font-size: 1.5rem;
        }
        
        .hero-section {
            padding: 100px 0 50px 0;
            color: white;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s both;
        }
        
        .hero-buttons {
            animation: fadeInUp 1s ease 0.4s both;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
            animation: fadeInUp 1s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            line-height: 80px;
            text-align: center;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-size: 2rem;
        }
        
        .icon-mahasiswa {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .icon-dosen {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }
        
        .icon-tugas {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }
        
        .icon-nilai {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: white;
        }
        
        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }
        
        .feature-text {
            color: #666;
            margin-bottom: 0;
        }
        
        .stat-section {
            background: white;
            padding: 60px 0;
            margin-top: 50px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: #666;
            font-weight: 500;
        }
        
        .login-section {
            padding: 50px 0;
        }
        
        .login-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            max-width: 450px;
            margin: 0 auto;
        }
        
        .login-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .login-subtitle {
            color: #666;
            margin-bottom: 30px;
        }
        
        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
            color: white;
        }
        
        .btn-register {
            background: transparent;
            border: 2px solid #667eea;
            color: #667eea;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .btn-register:hover {
            background: #667eea;
            color: white;
        }
        
        .footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .feature-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-graduation-cap"></i> LMS Sederhana
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#features">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <?php if(isset($_SESSION['nim'])): ?>
                    <li class="nav-item">
                        <?php if($_SESSION['role'] == 'mahasiswa'): ?>
                            <a class="nav-link btn btn-primary text-white px-4" href="mahasiswa/dashboard.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        <?php else: ?>
                            <a class="nav-link btn btn-primary text-white px-4" href="dosen/dashboard.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        <?php endif; ?>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white px-4" href="auth/login.php">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">
                    Belajar Jadi Lebih Mudah dengan <span style="color: #ffd700;">LMS Sederhana</span>
                </h1>
                <p class="hero-subtitle">
                    Platform pembelajaran online yang dirancang khusus untuk memudahkan proses belajar mengajar. 
                    Akses materi, kumpulkan tugas, dan lihat nilai secara real-time.
                </p>
                <div class="hero-buttons">
                    <?php if(!isset($_SESSION['nim'])): ?>
                        <a href="auth/login.php" class="btn btn-light btn-lg me-2">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a href="#features" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle"></i> Pelajari
                        </a>
                    <?php else: ?>
                        <a href="<?= $_SESSION['role'] == 'mahasiswa' ? 'mahasiswa/dashboard.php' : 'dosen/dashboard.php' ?>" 
                           class="btn btn-light btn-lg">
                            <i class="fas fa-tachometer-alt"></i> Menuju Dashboard
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='500' viewBox='0 0 800 600'%3E%3Ccircle cx='400' cy='300' r='250' fill='%23ffffff' opacity='0.1'/%3E%3Ccircle cx='400' cy='300' r='200' fill='%23ffffff' opacity='0.1'/%3E%3Ccircle cx='400' cy='300' r='150' fill='%23ffffff' opacity='0.1'/%3E%3Ctext x='400' y='320' text-anchor='middle' fill='white' font-size='48' font-weight='bold' font-family='Poppins'%3ELMS%3C/text%3E%3C/svg%3E" 
                     alt="Hero Illustration" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Fitur Section -->
<section id="features" class="py-5">
    <div class="container">
        <h2 class="text-center text-white mb-5" style="font-weight: 700;">Fitur Unggulan</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="feature-card">
                    <div class="feature-icon icon-mahasiswa">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="feature-title">Untuk Mahasiswa</h3>
                    <p class="feature-text">
                        Akses materi, upload tugas, lihat nilai, dan cek kehadiran dalam satu platform.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card">
                    <div class="feature-icon icon-dosen">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="feature-title">Untuk Dosen</h3>
                    <p class="feature-text">
                        Kelola kelas, beri tugas, nilai mahasiswa, dan pantau kehadiran dengan mudah.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card">
                    <div class="feature-icon icon-tugas">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="feature-title">Manajemen Tugas</h3>
                    <p class="feature-text">
                        Deadline reminder, upload file, dan notifikasi tugas baru.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="feature-card">
                    <div class="feature-icon icon-nilai">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Analitik & Nilai</h3>
                    <p class="feature-text">
                        Lihat statistik kehadiran dan perkembangan nilai secara visual.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik Section -->
<section class="stat-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Mahasiswa Aktif</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Dosen</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">300+</div>
                    <div class="stat-label">Tugas Terkumpul</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Kepuasan User</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login/Register Section -->
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-card">
                    <h2 class="login-title text-center">Selamat Datang!</h2>
                    <p class="login-subtitle text-center">
                        Silakan login untuk mengakses fitur lengkap LMS
                    </p>
                    
                    <?php if(!isset($_SESSION['nim'])): ?>
                        <div class="d-grid gap-3">
                            <a href="auth/login.php" class="btn btn-login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                            <a href="auth/register.php" class="btn btn-register">
                                <i class="fas fa-user-plus"></i> Register (Mahasiswa)
                            </a>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="text-center">
                            <p class="mb-2">Demo Akun:</p>
                            <div class="row">
                                <div class="col-6">
                                    <small class="text-muted d-block">Mahasiswa</small>
                                    <small><strong>NIM:</strong> 1234567890</small><br>
                                    <small><strong>Pass:</strong> password</small>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted d-block">Dosen</small>
                                    <small><strong>NIM:</strong> 1987654321</small><br>
                                    <small><strong>Pass:</strong> password</small>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                            <h4 class="mt-3">Anda sudah login sebagai</h4>
                            <p class="h5"><?= $_SESSION['nama'] ?></p>
                            <p class="text-muted">(<?= $_SESSION['role'] ?>)</p>
                            <a href="<?= $_SESSION['role'] == 'mahasiswa' ? 'mahasiswa/dashboard.php' : 'dosen/dashboard.php' ?>" 
                               class="btn btn-login mt-3">
                                <i class="fas fa-tachometer-alt"></i> Masuk Dashboard
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5" style="background: rgba(255,255,255,0.1);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-white">
                <h2 style="font-weight: 700;">Tentang LMS Sederhana</h2>
                <p class="lead">
                    LMS Sederhana adalah platform learning management system yang dirancang khusus 
                    untuk kebutuhan 1 mata kuliah dan 1 kelas.
                </p>
                <p>
                    Dibangun dengan teknologi PHP Native dan MySQL, sistem ini menawarkan kemudahan 
                    penggunaan tanpa mengorbankan fitur-fitur penting yang dibutuhkan dalam proses 
                    belajar mengajar.
                </p>
                <div class="mt-4">
                    <i class="fas fa-check-circle me-2"></i> Mudah digunakan<br>
                    <i class="fas fa-check-circle me-2"></i> Ringan dan cepat<br>
                    <i class="fas fa-check-circle me-2"></i> Fitur lengkap<br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 rounded">
                    <h4 class="mb-3">Tech Stack</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary p-2">PHP Native</span>
                        <span class="badge bg-info p-2">MySQL</span>
                        <span class="badge bg-success p-2">Bootstrap 5</span>
                        <span class="badge bg-warning p-2">JavaScript</span>
                        <span class="badge bg-danger p-2">Chart.js</span>
                        <span class="badge bg-secondary p-2">Font Awesome</span>
                    </div>
                    
                    <h4 class="mt-4 mb-3">Fitur Teknis</h4>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-lock text-success me-2"></i> Login dengan Password Hash</li>
                        <li><i class="fas fa-envelope text-success me-2"></i> Lupa Password via Email</li>
                        <li><i class="fas fa-upload text-success me-2"></i> Upload File Tugas</li>
                        <li><i class="fas fa-chart-pie text-success me-2"></i> Statistik Kehadiran</li>
                        <li><i class="fas fa-clock text-success me-2"></i> Countdown Deadline</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><i class="fas fa-graduation-cap"></i> LMS Sederhana</h5>
                <p>Platform pembelajaran online untuk 1 mata kuliah dan 1 kelas.</p>
            </div>
            <div class="col-md-3">
                <h5>Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="#features" class="text-white">Fitur</a></li>
                    <li><a href="#about" class="text-white">Tentang</a></li>
                    <li><a href="auth/login.php" class="text-white">Login</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Kontak</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope"></i> support@lms.test</li>
                    <li><i class="fas fa-phone"></i> +62 123 4567 890</li>
                </ul>
            </div>
        </div>
        <hr class="bg-white">
        <div class="text-center">
            <small>&copy; 2024 LMS Sederhana. All rights reserved.</small>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Smooth Scroll -->
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if(window.scrollY > 50) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
    }
});
</script>

</body>
</html>
