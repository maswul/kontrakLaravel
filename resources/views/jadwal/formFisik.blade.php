<table class="table table-bordered table-striped" id="data-table">
    <thead>
    <tr>
        <th style="width: 50px">No.</th>
        <th>Uraian</th>
        <th style="width: 200px">Tanggal</th>
        <th style="width: 200px">Nomor</th>
    </tr>
    </thead>
    <tbody>
        <input type="hidden" name="termin_id" id="termin_id" value="{{ $termin_id ?? '' }}">
        <input type="hidden" name="fisik_id" value="{{ $fisik_id ?? '' }}">
        <tr>
            <td>1</td>
            <td>Permohonan Pemeriksaan (Kontraktor)</td>
            <td><input class="form-control" type="text" name="termin_tgl_1" id="termin_tgl_1" value="{{ $termin->termin_tgl_1 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_1" id="termin_no_1" value="{{ $termin->termin_no_1 ?? '' }}"></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lap. Kemajuan Pekerjaan (Kontraktor)</td>
            <td><input class="form-control" type="text" name="termin_tgl_2" id="termin_tgl_2" value="{{ $termin->termin_tgl_2 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_2" id="termin_no_2" value="{{ $termin->termin_no_2 ?? '' }}"></td>
        </tr>
        <tr>
            <td>3</td>
            <td>BA. Hasil Pemeriksaan Pekerjaan (Tim Teknis)</td>
            <td><input class="form-control" type="text" name="termin_tgl_3" id="termin_tgl_3" value="{{ $termin->termin_tgl_3 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_3" id="termin_no_3" value="{{ $termin->termin_no_3 ?? '' }}"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>BA. Serah Terima Pertama (PPK)</td>
            <td><input class="form-control" type="text" name="termin_tgl_4" id="termin_tgl_4" value="{{ $termin->termin_tgl_4 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_4" id="termin_no_4" value="{{ $termin->termin_no_4 ?? '' }}"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>BA. Serah Terima Hasil Pekerjaan (PPK + KPA)</td>
            <td><input class="form-control" type="text" name="termin_tgl_5" id="termin_tgl_5" value="{{ $termin->termin_tgl_5 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_5" id="termin_no_5" value="{{ $termin->termin_no_5 ?? '' }}"></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Surat Pemeriksaan Administratif (KPA)</td>
            <td><input class="form-control" type="text" name="termin_tgl_6" id="termin_tgl_6" value="{{ $termin->termin_tgl_6 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_6" id="termin_no_6" value="{{ $termin->termin_no_6 ?? '' }}"></td>
        </tr>
        <tr>
            <td>7</td>
            <td>BA. Pemeriksaan Administratif (Tim Administratif)</td>
            <td><input class="form-control" type="text" name="termin_tgl_7" id="termin_tgl_7" value="{{ $termin->termin_tgl_7 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_7" id="termin_no_7" value="{{ $termin->termin_no_7 ?? '' }}"></td>
        </tr>
        <tr>
            <td>8</td>
            <td>BA. Pembayaran</td>
            <td><input class="form-control" type="text" name="termin_tgl_8" id="termin_tgl_8" value="{{ $termin->termin_tgl_8 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask></td>
            <td><input class="form-control" type="text" name="termin_no_8" id="termin_no_8" value="{{ $termin->termin_no_8 ?? '' }}"></td>
        </tr>


    </tbody>
</table>
