<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Data Pengunjung</title>
     <!-- Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
      body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      }
    .container {
      max-width: 1000px;
      margin: 10px auto;
      padding: 20px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      flex: 1;
    }

    </style>
  </head>
  <body>

  <section>
    <main class="container my-5">
      <h2 class="text-center mb-4">Formulir Data Pengunjung</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form-container">
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required />
              </div>

              <div class="mb-3">
                <label for="nip" class="form-label">NIP/NIM</label>
                <input type="number" class="form-control" id="nip" placeholder="Contoh: 220709091" required />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Contoh: nama@gmail.com" />
              </div>

              <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="laki" value="Laki-laki" required />
                  <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan" required />
                  <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" />
              </div>

              <div class="mb-3">
                <label for="keperluan" class="form-label">Jenis Pengunjung</label>
                <select class="form-select" id="keperluan" required>
                  <option value="">-- Pilih --</option>
                  <option value="Mahasiswa">Mahasiswa</option>
                  <option value="Dosen">Dosen</option>
                  <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                  <option value="Pustakawan">Pustakawan</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>

              <div class="text-end">
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i>Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </section>
  </body>
</html>
