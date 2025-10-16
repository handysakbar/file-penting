<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard E-Learning</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      display: flex;
      height: 100vh;
    }
    .sidebar {
      width: 220px;
      background-color: #f5f5f5;
      border-right: 1px solid #ddd;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }
    .sidebar h2 {
      font-weight: normal;
      margin-bottom: 20px;
      color: #444;
      font-size: 18px;
    }
    .sidebar input[type="search"] {
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }
    .sidebar nav a {
      display: flex;
      align-items: center;
      color: #333;
      text-decoration: none;
      padding: 8px 5px;
      margin-bottom: 10px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      font-size: 14px;
    }
    .sidebar nav a:hover {
      background-color: #ddd;
    }
    .sidebar nav a i {
      margin-right: 8px;
    }

    .main-content {
      flex: 1;
      padding: 20px 30px;
      overflow-y: auto;
    }
    .main-content h1 {
      margin-bottom: 20px;
      font-weight: normal;
      color: #222;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 15px;
      margin-bottom: 40px;
    }
    .card {
      background: white;
      border-radius: 6px;
      padding: 20px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card .icon {
      font-size: 36px;
      margin-bottom: 10px;
      opacity: 0.7;
    }
    .card .number {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .card .label {
      color: #666;
      margin-bottom: 10px;
      font-weight: 600;
    }
    .card a {
      font-size: 12px;
      color: #888;
      text-decoration: none;
      font-weight: bold;
    }
    .card a:hover {
      text-decoration: underline;
    }

    .green {
      border: 2px solid #34d399;
      color: #34d399;
    }
    .blue {
      border: 2px solid #3b82f6;
      color: #3b82f6;
    }
    .yellow {
      border: 2px solid #fbbf24;
      color: #fbbf24;
    }
    .red {
      border: 2px solid #ef4444;
      color: #ef4444;
    }
    .light-green {
      border: 2px solid #bbf7d0;
      color: #166534;
    }
    .light-blue {
      border: 2px solid #bfdbfe;
      color: #1e40af;
    }
    .light-red {
      border: 2px solid #fecaca;
      color: #991b1b;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <aside class="sidebar">
    <h2>Administrator</h2>
    <input type="search" placeholder="Search..." />
    <nav>
      <a href="#"><i class="fas fa-home"></i> Home</a>
      <a href="#"><i class="fas fa-chalkboard-teacher"></i> Manajemen Guru</a>
      <a href="#"><i class="fas fa-user-graduate"></i> Manajemen Siswa</a>
      <a href="#"><i class="fas fa-school"></i> Manajemen Kelas</a>
      <a href="#"><i class="fas fa-book"></i> Mata Pelajaran</a>
      <a href="#"><i class="fas fa-file-alt"></i> Manajemen Materi</a>
      <a href="#"><i class="fas fa-tasks"></i> Manajemen Tugas</a>
      <a href="#"><i class="fas fa-file-signature"></i> Manajemen Ujian</a>
      <a href="#"><i class="fas fa-newspaper"></i> Manajemen Berita</a>
    </nav>
  </aside>

  <main class="main-content">
    <h1>E-Learning</h1>

    <div class="cards">
      <div class="card green">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="number">10</div>
        <div class="label">Guru Pengajar</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card blue">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="number">5</div>
        <div class="label">Total Siswa</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card yellow">
        <div class="icon"><i class="fas fa-building"></i></div>
        <div class="number">8</div>
        <div class="label">Jumlah Kelas</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card red">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="number">9</div>
        <div class="label">Total Pelajaran</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card light-green">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="number">5</div>
        <div class="label">Total Materi</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card light-blue">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="number">3</div>
        <div class="label">Total Tugas</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card green">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="number">3</div>
        <div class="label">Total Ujian</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="card light-red">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <div class="number">3</div>
        <div class="label">Total Berita</div>
        <a href="#">View Details <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>

  </main>
</body>
</html>
