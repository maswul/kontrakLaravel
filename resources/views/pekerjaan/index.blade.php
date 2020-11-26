@extends('layout')

@section('title','Daftar Pekerjaan')
@section('JudulAtas','Daftar Pekerjaan')
@section('linkJudulAtas','Pekerjaan')

@section('customCss')

@endsection

@section('sidebar')
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url("pekerjaan")}}" class="nav-link active">
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
            <a href="{{url("perusahaan")}}" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>Perusahaan</p>
            </a>
        </li>
    </ul>

@endsection

@section('Isi')
    <div class="container-fluid">

        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judul">Tambah Pekerjaan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="PekerjaanForm" name="PekerjaanForm" >
                            @csrf
                            <input type="hidden" name="Pekerjaan_id" id="Pekerjaan_id">
                            <div class="row">
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="program">Program</label>
                                    <input type="text" class="form-control" id="program" name="program" value="Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi" required="">

                                </div>
                                </div>
                            </div>
                            <!-- Kegiatan -->
                            <div class="form-group">
                                <label for="kegiatan">Kegiatan</label>

                                    <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="Penyelenggaraan Sistem Penyediaan Air Minum" required="">

                            </div>
                            <!-- Pekerjaan -->
                            <div class="form-group">
                                <label for="pekerjaan" >Pekerjaan</label>

                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required="">

                            </div>

                            <!-- Tahun Kode rek dll -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Kode Rekening</label>
                                        <input type="text" class="form-control" id="kode_rek" name="kode_rek" value="5 2 2 21 02" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Kode Kegiatan</label>
                                        <input type="text" class="form-control" id="kode_keg" name="kode_keg" value="10335003" required="">
                                    </div>
                                </div>
                            </div>

                            <!-- HPS Penawaran Nego -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>HPS</label>
                                        <input type="text"  class="form-control" id="hps" name="hps" placeholder="Hps" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Penawaran</label>
                                        <input type="text"  class="form-control" id="penawaran" name="penawaran" placeholder="Penawaran" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Nego</label>
                                        <input type="text"  class="form-control" id="nego" name="nego" placeholder="Nego" required="">
                                    </div>
                                </div>
                            </div>

                            <!-- Perusahaan -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label >Perusahaan</label>
                                        <select name="perusahaan_id" id="perusahaan_id" class="form-control">
                                            @foreach($datas as $data)
                                                <option id="{{ $data->id }}" value="{{ $data->id }}">{{ $data->nama  }}</option>
                                            @endforeach
                                        </select>


                                    </div>
                                </div>
                            </div>

                            <!-- DPS SKPD -->
                            <div class="form-group">
                                <label  >DPA SKPD</label>
                                <input type="text" class="form-control" id="dpa_skpd" name="dpa_skpd" value="914/207.P/203.2/2020 Tanggal 12 Oktober 2020" required="">

                            </div>


                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pekerjaan</h3>
                        <div class="card-tools">
                            <button id="tambahbtn" type="submit" data-toggle="modal" data-target="#modal-lg" class="btn btn-danger float-right">Tambah Pekerjaan</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="data-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Pekerjaan</th>
                                <th>Tahun</th>
                                <th>Kode Keg.</th>
                                <th>Kode Rek.</th>
                                <th>Pelaksana</th>
                                <th>HPS</th>
                                <th>Nego</th>


                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection

@section('customJS')

@endsection

@section('script')
    <script type="text/javascript">
        $(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            //inputMASK


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
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'pekerjaan', name: 'pekerjaans.pekerjaan'},
                    {data: 'tahun', name: 'pekerjaans.tahun'},
                    {data: 'kode_keg', name: 'pekerjaans.kode_keg'},
                    {data: 'kode_rek', name: 'pekerjaans.kode_rek'},
                    {data: 'nama', name:'perusahaans.nama'},
                    {data: 'hps', name:'pekerjaans.hps', render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp ' )},
                    {data: 'nego', name:'pekerjaans.nego', render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp ' )},

                ]
            });

            $('#simpan').click(function (e){
                e.preventDefault();
                $(this).html('Sending');
                $.ajax({
                    data: $("#PekerjaanForm").serialize(),
                    url: "",
                    type: "POST",
                    dataType: 'json',
                    success: function (data){
                        $("#PekerjaanForm").trigger("reset");
                        $("#simpan").html("Simpan");
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });
                        $("#modal-lg").modal('hide');
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

            $("#tambahbtn").click(function (e){
                e.preventDefault();

                $("#Pekerjaan_id").val('');
                $("#PekerjaanForm").trigger('reset');
                $("#simpan").html("Simpan")
                $("#modal-lg").modal('show');
            });

            $('body').on('click', '.editPerusahaan', function (){
                var Perusahaan_id = $(this).data('id');
                $.get("pekerjaan" + "/" + Perusahaan_id + "/edit", function (data){
                    $("#PekerjaanForm").trigger('reset');
                    $("#Pekerjaan_id").val(data.id);
                    $("#program").val(data.program);
                    $("#kegiatan").val(data.kegiatan);
                    $("#pekerjaan").val(data.pekerjaan);
                    $("#tahun").val(data.tahun);
                    $("#kode_keg").val(data.kode_keg);
                    $("#kode_rek").val(data.kode_rek);
                    $("#hps").val(data.hps);
                    $("#penawaran").val(data.penawaran);
                    $("#nego").val(data.penawaran);
                    $("#dpa_skpd").val(data.dpa_skpd);
                    $("#perusahaan_id").val(data.perusahaan_id);
                    $("#simpan").html('Update');
                    $("#modal-lg").modal('show');
                });
            });

            $('body').on('click', '.deletePerusahaan', function () {

                var Customer_id = $(this).data("id");
                confirm("Are You sure want to delete !");

                $.ajax({
                    type: "DELETE",
                    headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' },
                    url: "pekerjaan"+'/'+Customer_id+'hapus',
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
