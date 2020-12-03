@extends('layout')

@section('title', $title)
@section('JudulAtas',$title)
@section('linkJudulAtas','Pekerjaan')

@section('customCSS')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset("plugins/select2/css/select2.min.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") }}">
@endsection

@section('menu_kontrak','active menu-open')
@section('nav_pekerjaan', 'active')

@section('Isi')
    <form role="form" id="PekerjaanForm" name="PekerjaanForm" method="post" action="{{ route('pekerjaan.simpan') }}" >
    @csrf
    <div class="row">

        <div class="col-8">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">

                        <input type="hidden" name="Pekerjaan_id" id="Pekerjaan_id" value="{{$db->id ?? ''}}">
                        <input type="hidden" name="id" id="id" value="{{$db->id ?? ''}}">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="program">Program</label>
                                    <input type="text" class="form-control" id="program" name="program" value="{{ $db->program ?? 'Program Pengembangan Kinerja Pengelolaan Air Minum dan Sanitasi' }}" required="">

                                </div>
                            </div>
                        </div>
                        <!-- Kegiatan -->
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>

                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="{{ $db->kegiatan ?? 'Penyelenggaraan Sistem Penyediaan Air Minum' }}" required="">

                        </div>
                        <!-- Pekerjaan -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label id="lblpekerjaan" for="pekerjaan" >Pekerjaan</label>


                                    <textarea class="form-control text-sm" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>{{ $db->pekerjaan ?? '' }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tipe">Tipe Pekerjaan</label>
                                    <select id="tipe" class="form-control selectbs4" name="tipe">
                                        <option value="1">Konsultansi</option>
                                        <option value="2">Fisik</option>
                                        <option value="3">Perencanaan</option>
                                        <option value="4">Pengawasan</option>

                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- Tahun Kode rek dll -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required="" value="{{ $db->tahun ?? "" }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kode Rekening</label>
                                    <input type="text" class="form-control" id="kode_rek" name="kode_rek" value="{{ $db->kode_rek ?? "5 2 2 21 02" }}" required="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kode Kegiatan</label>
                                    <input type="text" class="form-control" id="kode_keg" name="kode_keg" value="{{ $db->kode_keg ?? "10335003" }}" required="">
                                </div>
                            </div>
                        </div>

                        <!-- HPS Penawaran Nego -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>HPS</label>
                                    <input type="text"  class="form-control" id="hps" name="hps"  required="" value="{{ $db->hps ?? '' }}" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Penawaran</label>
                                    <input type="text"  class="form-control" id="penawaran" name="penawaran"  required="" value="{{ $db->penawaran ?? '' }}" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nego</label>
                                    <input type="text"  class="form-control" id="nego" name="nego" required="" value="{{ $db->nego ?? '' }}" >
                                </div>
                            </div>
                        </div>

                        <!-- Perusahaan -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label >Perusahaan</label>
                                    <select name="perusahaan_id" id="perusahaan_id" class="form-control selectbs4">
                                        @foreach($datas as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama  }}</option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>
                        </div>

                        <!-- DPS SKPD -->
                        <div class="form-group">
                            <label  >DPA SKPD</label>
                            <input type="text" class="form-control" id="dpa_skpd" name="dpa_skpd" value="{{ $db->dpa_skpd ?? '914/207.P/203.2/2020 Tanggal 12 Oktober 2020' }}" required="">

                        </div>



                </div>
                <div class="card-footer">
                    <button id="simpan" type="submit" class="btn btn-primary float-right">Simpan</button>
                    <a href="{{ route('pekerjaan.list') }}" class="btn btn-default" role="button">Batal</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Khusus Fisik/Pengawasan/Perencanaan</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="program">Tim Monitoring</label>
                                    <input type="text" class="form-control" id="nama_monitoring" name="nama_monitoring" value="{{ $db->nama_monitoring ?? '' }}" required="">

                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="program">NIP Monitoring</label>
                                <input type="text" class="form-control" id="nip_monitoring" name="nip_monitoring" value="{{ $db->nip_monitoring ?? '' }}" required="">

                            </div>
                        </div>
                    </div>
                        <!-- Kegiatan -->
                        <div class="form-group">
                            <label for="kegiatan">Pengawas Pekerjaan</label>

                            <select name="perusahaan_pengawas" id="perusahaan_pengawas" class="form-control selectbs4">
                                @foreach($datas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama  }}</option>
                                @endforeach
                            </select>

                        </div>




                </div>

            </div>
        </div>
    </div>
    </form>
@endsection

@section('customJS')
    <!-- Select2 -->
    <script src="{{ asset("plugins/select2/js/select2.full.min.js") }}"></script>

    <script src="{{ asset("plugins/inputmask/jquery.inputmask.min.js")}}"></script>
    <script src="{{ asset("plugins/inputmask/bindings/inputmask.binding.js")}}"></script>
@endsection

@section ("script")
    <script type="text/javascript">
        $ (function (){
            //init data
            $("#tipe").val({{ $db->tipe ?? '' }})
            $("#perusahaan_id").val( {{ $db->perusahaan_id ?? '' }} )
            $("#perusahaan_pengawas").val( {{ $db->perusahaan_pengawas?? '' }} )

            //inputMASK
            $("#hps").inputmask('currency', {autoUnmask: true});
            $("#penawaran").inputmask('currency', {autoUnmask: true});
            $("#nego").inputmask('currency', {autoUnmask: true});

            $('.selectbs4').select2({
                theme: 'bootstrap4'
            })

            if($("#tipe").val() > 1){
                $("#lblpekerjaan").html("Lokasi");
            }

            //ini untuk fungsi ganti rekening
            $("#tipe").change(function(){
                if ($(this).val() == 1)
                {
                    $("#kode_rek").val("5 2 2 21 02")
                    $("#lblpekerjaan").html("Pekerjaan");
                }else{
                    $("#kode_rek").val("5 2 2 24 01");
                    $("#lblpekerjaan").html("Lokasi");

                }
            });
        });
    </script>
@endsection
