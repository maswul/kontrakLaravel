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

    });
</script>
@endsection
