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
    <form name="dataForm" id="dataForm" target="" method="post">
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
               
                    <input type="hidden" name="Pekerjaan_id" value="{{ $pekerjaan_id ?? '' }}">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                    
                        <div class="tab-pane fade" id="lelang-tab-home" role="tabpanel" aria-labelledby="lelang-home-tab">
                            @include('jadwal.formLelang')
                        </div>
                        <div class="tab-pane fade  show active" id="termin-tab-home" role="tabpanel" aria-labelledby="termin-home-tab">
                            @include('jadwal.formFisik')
                        </div>
                        
                    </div>
                
                
            </div>
            <div class="card-footer">
                <button id="simpan" type="submit" class="btn btn-primary float-right">Simpan</button>
                <a name="" id="" class="btn btn-default" href="{{ url('pekerjaan') }}" role="button">Batal</a>
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

        
        
    });
</script>
@endsection