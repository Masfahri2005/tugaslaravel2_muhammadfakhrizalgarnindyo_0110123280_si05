<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Data Pegawai</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Pegawai Kampus</h3>

            <div class="card-tools">
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="pegawaiTable">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Email</th>
                  <th>Kampus</th>
                  <th>Alamat</th>
                  <th>Jabatan</th>
                  <th>Gaji</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($pegawai as $key => $data)
                <tr>
                  <td>{{ $data['nama'] }}</td>
                  <td>{{ $data['umur'] }}</td>
                  <td>{{ $data['email'] }}</td>
                  <td>{{ $data['kampus'] }}</td>
                  <td>{{ $data['alamat'] }}</td>
                  <td>{{ $data['jabatan'] }}</td>
                  <td>{{ number_format($data['gaji'], 0, ',', '.') }}</td>
                  <td>{{ $data['status'] }}</td>
                  <td class="btn-group">
                    <button type="button" class="btn btn-warning btn-sm edit-btn" data-toggle="modal"
                      data-target="#editModal{{ $key }}">
                      Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm delete-btn ml-2">
                      Delete
                    </button>
                  </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="editModal{{ $key }}" tabindex="-1"
                  aria-labelledby="editModalLabel{{ $key }}" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $key }}">Edit Data Pegawai</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form id="editDataForm{{ $key }}">
                          <!-- Form fields with existing data -->
                          <div class="form-group">
                            <label for="editNama{{ $key }}">Nama</label>
                            <input type="text" class="form-control" id="editNama{{ $key }}" value="{{ $data['nama'] }}"
                              required>
                          </div>
                          <!-- Add other fields similarly -->
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
            </table>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah Data
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="tambahDataForm">
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                      </div>
                      <div class="form-group">
                        <label for="kampus">Kampus</label>
                        <input type="text" class="form-control" id="kampus" required>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" required>
                      </div>
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" required>
                      </div>
                      <div class="form-group">
                        <label for="gaji">Gaji</label>
                        <input type="number" class="form-control" id="gaji" required>
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="status" id="statusAktif" value="Aktif"
                            required>
                          <label class="form-check-label" for="statusAktif">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="status" id="statusTidakAktif"
                            value="Tidak Aktif" required>
                          <label class="form-check-label" for="statusTidakAktif">Tidak Aktif</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      // Tombol edit diklik
      $('.edit-btn').on('click', function () {
        // Ambil baris tabel terkait
        var row = $(this).closest('tr');
        // Ambil data dari kolom yang sesuai
        var nama = row.find('td:eq(0)').text();
        var umur = row.find('td:eq(1)').text();
        var email = row.find('td:eq(2)').text();
        var kampus = row.find('td:eq(3)').text();
        var alamat = row.find('td:eq(4)').text();
        var jabatan = row.find('td:eq(5)').text();
        var gaji = row.find('td:eq(6)').text();
        var status = row.find('td:eq(7)').text();
        // Pracetakkan nilai ke dalam modal edit
        $('#editNama').val(nama);
        $('#editUmur').val(umur);
        $('#editEmail').val(email);
        $('#editKampus').val(kampus);
        $('#editAlamat').val(alamat);
        $('#editJabatan').val(jabatan);
        $('#editGaji').val(gaji);
        $('#editStatus').val(status);
      });

      // Tombol hapus diklik
      $('.delete-btn').on('click', function () {
        // Konfirmasi penghapusan atau logika lainnya
        // ...
        // Hapus baris tabel terkait
        $(this).closest('tr').remove();
      });
    });
  </script>
</body>

</html>