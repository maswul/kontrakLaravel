@extends('layout')

@section('title','Buat Jadwal Kontrak Baru')
@section('JudulAtas','Buat Jadwal Kontrak')
@section('linkJudulAtas','Pekerjaan / Jadwal')

@section('customCSS')
    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset("plugins/select2/css/select2.min.css") }}">
  <link rel="stylesheet" href="{{ asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") }}">
@endsection

<!-- Menu -->
@section('menu_kontrak','active menu-open')
@section('nav_pekerjaan', 'active')
<!-- Menu -->

{{-- Isi Konten --}}
@section('Isi')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div id="alert-ku" class="alert alert-success text-center" role="alert">
                Pekerjaan {{ $pekerjaan }}
            </div>

        </div>
    </div>

    <form name="dataForm" id="dataForm" action="{{ route('lelang.simpan') }}" method="post">
        @csrf
        <input type="hidden" name="pekerjaan_id" id="pekerjaan_id" value="{{ $pekerjaan_id  }}">
        <input type="hidden" name="pekerjaan_tipe" id="pekerjaan_tipe" value="{{ $pekerjaan_tipe }}">
    <div class="col-md-12">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <a name="" id="btnTgl" class="btn btn-danger float-right" href="#" role="button">Tgl. template</a>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="pt-2 px-2">
                        <h3 class="card-title">Buat Jadwal Baru</h3>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" id="lelang-tab" data-toggle="pill" href="#lelang-tab-home" role="tab" aria-controls="lelang-tab" aria-selected="true">Lelang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  active" id="termin-tab" data-toggle="pill" href="#termin-tab-home" role="tab" aria-controls="termin-tab" aria-selected="false">Termin</a>
                  </li>
                </ul>
            </div>
            <div class="card-body">


                    <div class="tab-content" id="custom-tabs-one-tabContent">

                        <div class="tab-pane fade" id="lelang-tab-home" role="tabpanel" aria-labelledby="lelang-home-tab">
                            @include('jadwal.formLelang')
                        </div>
                        <div class="tab-pane fade  show active" id="termin-tab-home" role="tabpanel" aria-labelledby="termin-home-tab">
                            @switch($pekerjaan_tipe)
                                @case(1)
                                    {{-- Jasa Konsultasi --}}

                                    @break
                                @case(2)
                                    {{-- Fisik --}}
                                    @include('jadwal.formFisik')
                                    @break
                                @case(3)
                                    {{-- perencanaan --}}
                                    @include('jadwal.formTermin')
                                    @break
                                @default
                                    {{-- Pengawasan --}}
                                    @include('jadwal.formPengawasan')
                                    @break

                            @endswitch

                        </div>

                    </div>


            </div>
            <div class="card-footer">
                <button id="simpan" type="submit" class="btn btn-primary float-right">Simpan</button>
                <a name="" id="" class="btn btn-default" href="{{ route('pekerjaan.list') }}" role="button">Batal</a>
            </div>
        </div>
    </div>
    </form>
</div>
{{-- Isi Konten --}}
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



        //Datemask dd/mm/yyyy
        $('[data-mask]').inputmask()

        $("#simpan").click(function () {
            $("#dataForm").submit();
        })

        $("#btnTgl").click(function (){
            //isi default tanggal
            $("#tgl_0").val("09-10-2020");
            $("#tgl_1").val("12-10-2020");
            $("#tgl_2").val("12-10-2020");
            $("#tgl_3").val("13-10-2020");
            $("#tgl_4").val("14-10-2020");
            $("#tgl_5").val("15-10-2020");
            $("#tgl_6").val("16-10-2020");
            $("#tgl_7").val("16-10-2020");
            $("#tgl_8").val("19-10-2020");
            $("#tgl_9").val("20-10-2020");
            $("#tgl_10").val("21-10-2020");
            $("#tgl_11").val("22-10-2020");
            $("#tgl_12").val("22-10-2020");
            $("#tgl_13").val("23-10-2020");
            $("#tgl_14").val("23-10-2020");
            $("#tgl_15").val("26-10-2020");
            $("#tgl_16").val("27-10-2020");
            $("#tgl_17").val("27-10-2020");
            $("#tgl_18").val("27-10-2020");
            $("#tgl_19").val("10-12-2020");


            switch ($("#pekerjaan_tipe").val()) {

                case "1":
                    //jasa konsultansi
                    break
                case "2":
                    //fisik
                    $("#termin_tgl_1").val("09-12-2020");
                    $("#termin_tgl_2").val("09-12-2020");
                    $("#termin_tgl_3").val("09-12-2020");
                    $("#termin_tgl_4").val("10-12-2020");
                    $("#termin_tgl_5").val("11-12-2020");
                    $("#termin_tgl_6").val("11-12-2020");
                    $("#termin_tgl_7").val("11-12-2020");
                    $("#termin_tgl_8").val("14-12-2020");
                    break
                case "3":
                    //perencanaan
                    $("#termin_tgl_1").val("27-10-2020");
                    $("#termin_tgl_2").val("27-10-2020");
                    $("#termin_tgl_3").val("27-10-2020");
                    $("#termin_tgl_4").val("10-12-2020");
                    $("#termin_tgl_5").val("10-12-2020");
                    $("#termin_tgl_6").val("10-12-2020");
                    $("#termin_tgl_7").val("11-12-2020");
                    $("#termin_tgl_8").val("11-12-2020");
                    $("#termin_tgl_9").val("14-12-2020");
                    break
                case "4":
                    //pengawasan
                    $("#termin_tgl_1").val("09-12-2020");
                    $("#termin_tgl_2").val("10-12-2020");
                    $("#termin_tgl_3").val("11-12-2020");
                    $("#termin_tgl_4").val("11-12-2020");
                    $("#termin_tgl_5").val("14-12-2020");
                    $("#termin_tgl_6").val("15-12-2020");
                    break

            }
        })

    });
</script>
@endsection
