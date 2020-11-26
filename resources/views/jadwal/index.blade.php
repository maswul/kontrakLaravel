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
