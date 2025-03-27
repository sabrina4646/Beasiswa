<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Sistem Informasi Penerimaan Beamahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav  ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?pg=pendaftaran">Pendaftaran</a>
            </li>
            
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['nama']; ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?pg=akun_mahasiswa">Akun</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </div>

          </ul>
        </div>
      </div>
    </nav>