@extends('layout')

@section('Isi')
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                Content
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pekerjaan</h3>
                    <div class="card-tools">
                        <a name="" id="" class="btn btn-primary btn-sm" href="#" role="button"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped text-sm" id="data-table">
                        <thead>
                            <tr>
                                <th style="width: 90px">Aksi</th>
                                <th>Kategori</th>
                                <th>Pekerjaan</th>
                                <th style="width: 100px">Tahun</th>
                                <th>Pelaksana</th>
                                <th>Kontrak</th>
                                <th>SPK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($db as $item)
                                <tr>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-social btn-flat btn-info btn-xs"
                                            data-toggle="dropdown"><i class='fa fa-arrow-circle-down'></i> Pilih
                                            Aksi</button>
                                        <div class="dropdown-menu">
                                            <h6 class="dropdown-header text-left">Modif Data</h6>
                                            <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Rubah</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-trash"
                                                    style="color: red"></i> Hapus</a>
                                            <div class=" dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('lelang', ['id' => $item->id]) }}"><i class="fas fa-calendar-alt"></i> Jadwal
                                                Lelang & Termin</a>
                                            @unless(chkLelang($item->id))
                                                <div class=" dropdown-divider"></div>
                                                <h6 class="dropdown-header text-left">Pilih Menu Cetak</h6>
                                                <a class="dropdown-item" href="{{ route('cetak.kontrak',['id'=>$item->id]) }}"><i class="fas fa-print"></i> Cetak Kontrak</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-file-word"></i> Cetak
                                                    Termyn</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Cetak
                                                    Ringkasan dan Pajak</a>
                                            @endunless

                                        </div>

                                    </td>
                                    <td>{{ tipePekerjaan($item->tipe) }}</td>
                                    <td style="">{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ getPerusahaan($item->perusahaan_id) }}</td>
                                    <td style="width: 130px">@currency($item->nego)</td>
                                    <td style="width: 130px">{{ tglKontrak($item->id) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function() {
            $("#data-table").DataTable({
                "order": [
                    [2, "desc"]
                ],
                columnDefs: [{
                    orderable: false,
                    targets: 0
                }],
            });

        });

    </script>
@endsection
