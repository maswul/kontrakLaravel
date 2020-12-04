@extends('layout')

@section('title','Daftar Pekerjaan')
@section('JudulAtas','Daftar Pekerjaan')
@section('linkJudulAtas','Pekerjaan')

@section('customCss')

@endsection

@section('menu_kontrak','active menu-open')
@section('nav_pekerjaan', 'active')

@section('Isi')
    <!-- Button trigger modal -->

    <div class="row">
        <div class="col">
            @if (session('pesan'))
                <div id="alert-ku" class="alert alert-warning text-center" role="alert">
                    {{ session('pesan') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pekerjaan</h3>
                    <div class="card-tools">
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('pekerjaan.baru') }}" role="button"><i
                                class="fas fa-plus"></i> Tambah</a>
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
                                <tr id="dtt{{$item->id}}">
                                    <td class="text-center">
                                        <button type="button" class="btn btn-social btn-flat btn-info btn-xs"
                                            data-toggle="dropdown"><i class='fa fa-arrow-circle-down'></i> Pilih
                                            Aksi</button>
                                        <div class="dropdown-menu">
                                            <h6 class="dropdown-header text-left">Modif Data</h6>
                                            <a class="dropdown-item" href="{{ route('pekerjaan.tambah', ['id'=>$item->hashid]) }}"><i class="fas fa-edit"></i> Rubah</a>
                                            <a class="dropdown-item deletePekerjaan" data-id="{{ $item->id }}" href="#"><i class="fas fa-trash"
                                                    style="color: red"></i> Hapus</a>
                                            <div class=" dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('lelang', ['id' => $item->id]) }}"><i class="fas fa-calendar-alt"></i> Jadwal
                                                Lelang & Termin</a>
                                            @unless(chkLelang($item->id))
                                                <div class=" dropdown-divider"></div>
                                                <h6 class="dropdown-header text-left">Pilih Menu Cetak</h6>
                                                <a class="dropdown-item" href="{{ route('cetak.kontrak',['id'=>$item->id]) }}"><i class="fas fa-print"></i> Cetak Kontrak</a>
                                                <a class="dropdown-item" href="{{ route('cetak.termin', ['id' => $item->id]) }}"><i class="fas fa-file-word"></i> Cetak
                                                    Termyn</a>
                                                <a class="dropdown-item" href="{{ route('cetak.ringkasan', ['id'=>$item->id]) }}"><i class="fas fa-file-excel"></i> Cetak
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

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            var table = $("#data-table").DataTable({
                "order": [
                    [2, "desc"]
                ],
                columnDefs: [{
                    orderable: false,
                    targets: 0
                }],
            });


            $("#alert-ku").fadeTo(1000, 500).slideUp(500, function(){
                $("#alert-ku").slideUp(500);
            });

            $('body').on('click', '.deletePekerjaan', function () {

                var Customer_id = $(this).data("id");

                Alt.alternative({
                    status: "question",
                    title: "Are You Sure",
                    text: "Your data will delete permanently",
                    showCancelButton: true,
                }).then((res) => {
                    if(res) {
                        $.ajax({
                            type: "POST",
                            data: {'id': Customer_id},
                            headers: { 'X-CSRF-TOKEN' : '{{csrf_token()}}' },
                            url: "{{ route('pekerjaan.hapus') }}",
                            success: function (data) {
                                Alt.alternative({
                                    status: "success",
                                    title: "Deleted",
                                    text: "Data deleted permanently"
                                })
                                table.row("#dtt"+Customer_id).remove().draw();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                                Alt.alternative({
                                    status: "error",
                                    title: "Error",
                                    text: "Data can't be deleted!"
                                })
                            }

                        });


                    }

                })
            })

        });

    </script>
@endsection
