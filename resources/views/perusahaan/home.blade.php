@extends('layout')

@section('title','Daftar Perusahaan Aktif')
@section('JudulAtas','Daftar Perusahaan Aktif')
@section('linkJudulAtas','Perusahaan')

@section('sidebar')
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url("pekerjaan")}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Pekerjaan</p>
          </a>
        </li>
          <li class="nav-item">
              <a href="{{url("jadwal")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{url("cetak")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak</p>
              </a>
          </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{url("perusahaan")}}" class="nav-link active">
        <i class="nav-icon fas fa-building"></i>
        <p>Perusahaan</p>
      </a>
    </li>
  </ul>

@endsection

@section('Isi')
  <div class="container-fluid text-sm">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-danger card-outline">
                <div class="card-header">
                    <h3 class="card-title">Daftar Perusahaan</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <a href="{{ route("download.perusahaan") }}" role="button" class="btn btn-primary float-right">Download Data</a>
                        </div>
                      </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="data-table">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Direktur</th>
                            <th>Alamat</th>
                            <th>NPWP</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Tambah Perusahaan</h3>
                </div>

                <div class="card-body">
                    <form id="PerusahaanForm" name="PerusahaanForm">
                        @csrf
                        <input type="hidden" id="Perusahaan_id" name="Perusahaan_id">
                    <p class="mb-2">Data Perusahaan:</p>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-book"></i>
                                </span>

                            </div>
                            <input id="nama" name="nama" class="form-control" type="text" placeholder="Nama Perusahaan">
                        </div>
                    </div>
                    <!-- NPWP -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-users"></i>
                                </span>

                                </div>
                                <input id="direktur" name="direktur" class="form-control" type="text" placeholder="Nama Direktur">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input id="npwp" name="npwp" class="form-control" type="text" placeholder="NPWP">
                            </div>
                        </div>
                    </div>
                    <!--Lokasi bank -->
                    <p class="mt-4 mb-2">Bank:</p>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-money-check"></i>
                                </span>

                                </div>
                                <input id="bank" name="bank"  class="form-control" type="text" placeholder="Bank Jatim Cabang ...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input id="rekening" name="rekening" class="form-control" type="text" placeholder="No Rekening">
                            </div>
                        </div>
                    </div>
                    <!-- TEXTAREA ALAMT -->
                    <p class="mt-4 mb-2">Alamat Perusahaan:</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Jl. Gayungkebonsari No. 169 Surabaya"></textarea>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="card-footer">

                       <button id="simpan" type="submit" class="btn btn-lg btn-warning float-right">Simpan</button>

                </div>

                </div>

            </div>
        </div>

  </div>


@endsection

@section('script')
    <script type="text/javascript">
        $(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                "responsive": true,
                "autoWidth": false,

                ajax: "",
                columns: [

                    {data: 'nama', name: 'nama'},
                    {data: 'direktur', name: 'direktur'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'npwp', name: 'npwp'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });

            $('body').on('click', '.editPerusahaan', function (){
                var Perusahaan_id = $(this).data('id');
                $.get("perusahaan" + "/" + Perusahaan_id + "/edit", function (data){
                    $("#Perusahaan_id").val(data.id);
                    $("#nama").val(data.nama);
                    $("#direktur").val(data.direktur);
                    $("#npwp").val(data.npwp);
                    $("#bank").val(data.bank);
                    $("#rekening").val(data.rekening);
                    $("#alamat").val(data.alamat);
                    $("#simpan").html('Update');
                });
            });

            $('#simpan').click(function (e){
                e.preventDefault();
                $(this).html('Sending');

                $.ajax({
                    data: $("#PerusahaanForm").serialize(),
                    url: "",
                    type: "POST",
                    dataType: 'json',
                    success: function (data){
                        $("#Perusahaan_id").val('');
                        $("#PerusahaanForm").trigger("reset");
                        $("#simpan").html("Simpan");
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });
                        table.draw();

                    },
                    error: function (data){
                        console.log(data);
                        Toast.fire({
                            icon: 'error',
                            title: 'Ada kendala saat menyimpan data'
                        });
                        $("#simpan").html("Simpan Lagi");

                    }
                });
            });

            $('body').on('click', '.deletePerusahaan', function () {

                var Customer_id = $(this).data("id");
                confirm("Are You sure want to delete !");

                $.ajax({
                    type: "DELETE",
                    url: "perusahaan"+'/'+Customer_id,
                    success: function (data) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        Toast.fire({
                            icon: 'error',
                            title: 'Ada kendala saat menghapus data!'
                        });
                    }
                });
            });
        });
    </script>
@endsection
