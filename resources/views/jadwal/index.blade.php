@extends('layout')

@section('title','Jadwal Kontrak')
@section('JudulAtas','Jadwal Kontrak')
@section('linkJudulAtas','Jadwal')

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
                    <a href="{{url("pekerjaan")}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pekerjaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("jadwal")}}" class="nav-link active">
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

        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal Kontrak dan Termin</h3>
                        <div class="card-tools">
                            <a id="tambahbtn" href="{{ url("jadwal/create") }}" type="submit" class="btn btn-danger float-right">Tambah Jadwal Kontrak</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-sm" id="data-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Pekerjaan</th>
                                <th>Pelaksana</th>
                                <th>Nego</th>
                                <th>SPK (Kontrak)</th>
                                <th>Akhir Pekerjaan</th>
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
                    {data: 'pekerjaan.pekerjaan', name:'pekerjaan'},
                    {data: 'pekerjaan.perusahaan.nama', name: 'nama'},
                    {data: 'pekerjaan.nego', name:'nego', render: $.fn.dataTable.render.number( '.', ',', 2, 'Rp ' )},
                    {data: 'tgl_17', name: 'tgl_17', render:function(data){
                        return moment(data).locale('id').format('dddd, DD MMMM YYYY');
                    }
                    },
                    {data: 'tgl_19', name: 'tgl_19', render:function(data){
                        return moment(data).locale('id').format('dddd, DD MMMM YYYY');
                    }},

                ]
            });

            $('body').on('click', '.deletePerusahaan', function () {

                var Customer_id = $(this).data("id");
                confirm("Are You sure want to delete Id = " + Customer_id + "?");

                $.ajax({
                    type: "DELETE",
                    headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' },
                    url: "jadwal"+'/'+Customer_id+'hapus',
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
        })
    </script>
@endsection
