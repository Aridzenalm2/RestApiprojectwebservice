
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->

    <!-- Content Row -->

    <div class="row-ps-3">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12 col-sm-12 mt-5">
            <div class="card shadow mb-2 ms-3">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                    
                    <!-- Tombol Tambah Data -->
                    <!-- Akghir Tombol Tambah Data -->

                </div>
                <!-- Card Body -->
                <div class="card-body">
                        <div class="chart-area" hidden>
                            <canvas id="myAreaChart"></canvas>
                        </div>

                    <!-- Display Error jika ada error -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Akhir Display Error -->

                    <!-- Awal Dari Input Form -->
                    <form action="{{ url('/mahasiswa/store') }}" method="post">
                        @csrf
                        <div class="mb-3"><label for="namaperusahaanlabel">Nim</label>
                            <input class="form-control form-control-solid" id="nim" name="nim" type="text" placeholder="Contoh: D112011051" value="{{old('nim')}}">
                        </div>
                        
                        <div class="mb-3"><label for="namaperusahaanlabel">Nama</label>
                        <input class="form-control form-control-solid" id="nama" name="nama" type="text" placeholder="Contoh: Delista Fitria" value="{{old('nama')}}">
                        </div>

                        <div class="mb-3"><label for="namaperusahaanlabel">Mata Kuliah</label>
                            <input class="form-control form-control-solid" id="matkul" name="matkul" type="text" placeholder="Contoh: Database" value="{{old('matkul')}}">
                        </div>
                        <div class="mb-3"><label for="namaperusahaanlabel">Dosen</label>
                            <input class="form-control form-control-solid" id="dosen" name="dosen" type="text" placeholder="Contoh: Drs.Gilang" value="{{old('dosen')}}">
                        </div>
                        <div class="mb-3"><label for="namaperusahaanlabel">Nilai</label>
                            <input class="form-control form-control-solid" id="nilai" name="nilai" type="text" placeholder="Contoh: 80" value="{{old('nilai')}}">
                        </div>
                        <br>
                        <!-- untuk tombol simpan -->
                        
                        <input class="col-sm-1 btn btn-success btn-sm" type="submit" value="Simpan">

                        <!-- untuk tombol batal simpan -->
                        <a class="col-sm-1 btn btn-dark  btn-sm" href="{{ url('/perusahaan') }}" role="button">Batal</a>
                        
                    </form>
                    <!-- Akhir Dari Input Form -->
                </div>
            </div>
        </div>

        
    </div>

    
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Begin Page Content -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <!-- akhir update list keranjang dna list invoice -->

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <!-- <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script> -->

    <!-- Datatables plugin -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">