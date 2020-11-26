@extends('layout')

@section('title','Buat Jadwal Kontrak Baru')
@section('JudulAtas','Buat Jadwal Kontrak')
@section('linkJudulAtas','Jadwal / Baru')

@section('customCSS')
    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset("plugins/select2/css/select2.min.css") }}">
  <link rel="stylesheet" href="{{ asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") }}">
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


            <div class="col-md-12">
                <div class="card card-primary card-tabs">

                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="pt-2 px-2">
                                <h3 class="card-title">Buat Jadwal Baru</h3>
                            </li>
                          <li class="nav-item">
                            <a class="nav-link active" id="termin-tab" data-toggle="pill" href="#termin-tab-home" role="tab" aria-controls="termin-tab" aria-selected="true">Termin</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="lelang-tab" data-toggle="pill" href="#lelang-tab-home" role="tab" aria-controls="lelang-tab" aria-selected="false">Lelang</a>
                          </li>

                        </ul>
                      </div>
                    <div class="card-body">
                        <form id="TerminForm" name="TerminForm">
                            <input type="hidden" name="Termin_id" id="Termin_id">

                        <div class="tab-content" id="custom-tabs-one-tabContent">

                            <div class="tab-pane fade show active" id="termin-tab-home" role="tabpanel" aria-labelledby="termin-home-tab">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <select name="pekerjaan_id" id="pekerjaan_id" class="form-control selectbs4" style="width: 100%">
                                                    @foreach ($datas as $item)
                                                        <option value="{{ $item->id }}">{{ $item->pekerjaan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. SPK</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_spk" name="no_spk" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal SPK</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_spk" name="tgl_spk" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BA LAPDAL</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_ba_lapdal" name="no_ba_lapdal" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BA LAPDAL</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_ba_lapdal" name="tgl_ba_lapdal" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask  >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BAST LAPDAL</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_bast_lapdal" name="no_bast_lapdal" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BAST LAPDAL</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_bast_lapdal" name="tgl_bast_lapdal" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask  >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BA LAPKHIR</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_ba_lapkhir" name="no_ba_lapkhir"  >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BA LAPKHIR</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_ba_lapkhir" name="tgl_ba_lapkhir" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BAST LAPKHIR</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_bast_lapkhir" name="no_bast_lapkhir" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BAST LAPKHIR</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_bast_lapkhir" name="tgl_bast_lapkhir" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BAST Pekerjaan</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_bast_pekerjaan" name="no_bast_pekerjaan" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BAST Pekerjaan</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_bast_pekerjaan" name="tgl_bast_pekerjaan" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask  >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. BAST Pembayaran</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="no_bast_pembayaran" name="no_bast_pembayaran" >
                                                  </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal BAST Pembayaran</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tgl_bast_pembayaran" name="tgl_bast_pembayaran" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask >
                                                  </div>
                                            </div>

                                        </div>

                                    </div>

                             </div>

                             <div class="tab-pane fade" id="lelang-tab-home" role="tabpanel" aria-labelledby="lelang-home-tab">

                                <table class="table table-bordered table-striped" id="data-table">
                                    <thead>
                                    <tr>
                                        <th style="width: 50px">No.</th>
                                        <th>Perihal</th>
                                        <th>Proses</th>
                                        <th style="width: 150px">Tanggal</th>
                                        <th style="width: 350px">Nomor</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>BA Hasil Penelitian Dokumen data Perusahaan</td>
                                            <td>PPTK</td>
                                            <td><input class="form-control" type="text" name="tgl_0" id="tgl_0" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" disabled>
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Permohonan Bantuan Untuk Proses Pengadaan Langsung</td>
                                            <td>PPK</td>
                                            <td><input class="form-control" type="text" name="tgl_1" id="tgl_1" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_1" id="no_1">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Undangan Pengadaan Langsung</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_2" id="tgl_2" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">005/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_2" id="no_2">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Pemasukan / BA Evaluasi dan Penilaian Dokumen Prakualifikasi</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_3" id="tgl_3" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_3" id="no_3">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Undangan Aanwizjing</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_4" id="tgl_4" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">005/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_4" id="no_4">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>BA Aanwizjing/Penjelasan Pekerjaan</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_5" id="tgl_5" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">005/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_5" id="no_5">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>Pemasukan Dokumen Penawaran</td>
                                            <td>REKANAN</td>
                                            <td><input class="form-control" type="text" name="tgl_6" id="tgl_6" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">

                                                      <input type="text" class="form-control" name="no_6" id="no_6">

                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>BA Pemasukan dan Pembukaan Dokumen Penawaran</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_7" id="tgl_7" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_7" id="no_7">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><b>BA Evaluasi Dokumen Penawaran</b></td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_8" id="tgl_8" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_8" id="no_8">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td><b>Undangan : Klarifikasi dan Negosiasi Harga</b></td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_9" id="tgl_9" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">005/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_9" id="no_9">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td>BA Klarifikasi dan Negosiasi Harga</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_10" id="tgl_10" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_10" id="no_10">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td><b>BA Hasil Pengadaan Langsung</b></td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_11" id="tgl_11" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_11" id="no_11">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td>Penetapan Pemenang Pengadaan Langsung</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_12" id="tgl_12" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_12" id="no_12">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td>Pengumuman Pemenang Pengadaan Langsung</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_13" id="tgl_13" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_13" id="no_13">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td>Penyampaian Hasil Proses Pengadaan</td>
                                            <td>PEJABAT</td>
                                            <td><input class="form-control" type="text" name="tgl_14" id="tgl_14" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_14" id="no_14">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td>Surat Penunjukan Penyedia Jasa (Gunning)</td>
                                            <td>PPK</td>
                                            <td><input class="form-control" type="text" name="tgl_15" id="tgl_15" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_15" id="no_15">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>Surat Kesanggupan Kerja</td>
                                            <td>REKANAN</td>
                                            <td><input class="form-control" type="text" name="tgl_16" id="tgl_16" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td>Surat Perjanjian Kerja (Kontrak)</td>
                                            <td>PPK</td>
                                            <td><input class="form-control" type="text" name="tgl_17" id="tgl_17" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_17" id="no_17">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>SPMK Pelaksanaan</td>
                                            <td>PPK</td>
                                            <td><input class="form-control" type="text" name="tgl_18" id="tgl_18" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-default">602.1/</button>
                                                      </div>
                                                      <input type="text" class="form-control" name="no_18" id="no_18">
                                                      <span class="input-group-append">
                                                        <button type="button" class="btn btn-default">/ 105.4 / 2020</button>
                                                      </span>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>Penyerahan Hasil Pekerjaan</td>
                                            <td></td>
                                            <td><input class="form-control" type="text" name="tgl_19" id="tgl_19" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
                                            <td>


                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                             </div>
                        </div>

                        </form>
                    </div>

                    <div class="card-footer">
                        <button id="simpan" type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </div>
            </div>



    </div>


@endsection

@section('customJS')
    <!-- Select2 -->
    <script src="{{ asset("plugins/select2/js/select2.full.min.js") }}"></script>

    <script src="{{ asset("plugins/inputmask/min/jquery.inputmask.bundle.min.js") }}"></script>
@endsection

@section('script')
<script type="text/javascript">

    $(function () {
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.selectbs4').select2({
             theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('[data-mask]').inputmask()

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

        $("#simpan").click(function(e){
            e.preventDefault();
            $(this).html('Sending');
                $.ajax({
                    data: $("#TerminForm").serialize(),
                    url: "{{ url("jadwal") }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data){
                        $("#TerminForm").trigger("reset");
                        $("#simpan").html("Simpan");
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        });

                        window.setTimeout(function() {
                            window.location.href = '{{ url("jadwal") }}';
                        }, 1100);
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
        })
    })
</script>
@endsection
