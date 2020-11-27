@extends('layout')

@section('title','Cetak Kontrak')
@section('JudulAtas','Cetak Kontrak')
@section('linkJudulAtas','Cetak')

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
                    <a href="{{url("jadwal")}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("cetak")}}" class="nav-link active">
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
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Cetak Termin, Kontrak dan Pajak</h3>

                    </div>
                    <div class="card-body">

                        <table id="data-tables" class="table table-bordered table-striped text-sm">
                            <thead class=" text-center">
                                <tr>
                                    <th style="width: 100px">Cetak</th>
                                    <th>Pekerjaan</th>
                                    <th>Pelaksana</th>
                                    <th>Tahun</th>
                                    <th>Nilai Kontrak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($db as $item)
                                    <tr>
                                        <td class=" text-center">
                                            <div class="btn-group" role="group" aria-label="...">
                                                <a name="" id="alink" class="btn btn-danger btn-sm" href="{{ route('cetak.kontrak',['id' => $item->id]) }}" data-link="" role="button" data-toggle="tooltip" title="Cetak Kontrak"><i class="fa fa-print" aria-hidden="true"></i></a>
                                                <a name="" id="alink" class="btn btn-primary btn-sm" href="{{ route('cetak.termin',['id' => $item->id]) }}" role="button" data-toggle="tooltip" title="Cetak Termin"><i  class="fa fa-address-book" aria-hidden="true"></i></a>
                                                <a name="" id="alink" class="btn btn-warning btn-sm" href="{{ route('cetak.pajak',['id' => $item->id]) }}" role="button" data-toggle="tooltip" title="Cetak Pajak dan Ringkasan"><i  class="fa fa-newspaper" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                        <td>{{ $item->pekerjaan['pekerjaan'] }}</td>
                                        <td>{{ $item->pekerjaan['perusahaan']['nama'] }}</td>
                                        <td class=" text-center">{{ $item->pekerjaan['tahun'] }}</td>
                                        <td class=" text-right">@currency($item->pekerjaan['nego']) </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                    <div class="card-footer text-muted text-center">
                        Modul cetak merubah file ke template MS. excel atau word
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script src="{{ asset("perintah/cetak.js")}}"></script>
@endsection
