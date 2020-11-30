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
        <input type="hidden" name="lelang_id" value="{{ $lelang_id ?? '' }}">
        <tr>
            <td></td>
            <td>BA Hasil Penelitian Dokumen data Perusahaan</td>
            <td>PPTK</td>
            <td><input class="form-control" type="text" name="tgl_0" id="tgl_0" value="{{ $tgl_0 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
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
            <td><input class="form-control" type="text" name="tgl_1" id="tgl_1" value="{{ $tgl_1 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_1" id="no_1" value="{{ $no_1 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_2" id="tgl_2" value="{{ $tgl_2 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">005/</button>
                      </div>
                      <input type="text" class="form-control" name="no_2" id="no_2" value="{{ $no_2 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_3" id="tgl_3" value="{{ $tgl_3 ?? '' }}"  data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_3" id="no_3" value="{{ $no_3 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_4" id="tgl_4" value="{{ $tgl_4 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">005/</button>
                      </div>
                      <input type="text" class="form-control" name="no_4" id="no_4" value="{{ $no_4 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_5" id="tgl_5" value="{{ $tgl_5 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">005/</button>
                      </div>
                      <input type="text" class="form-control" name="no_5" id="no_5" value="{{ $no_5 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_6" id="tgl_6" value="{{ $tgl_6 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">

                      <input type="text" class="form-control" name="no_6" id="no_6" value="{{ $no_6 ?? '' }}">

                </div>

            </td>
        </tr>

        <tr>
            <td>7</td>
            <td>BA Pemasukan dan Pembukaan Dokumen Penawaran</td>
            <td>PEJABAT</td>
            <td><input class="form-control" type="text" name="tgl_7" id="tgl_7" value="{{ $tgl_7 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_7" id="no_7" value="{{ $no_7 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_8" id="tgl_8" value="{{ $tgl_8 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_8" id="no_8" value="{{ $no_8 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_9" id="tgl_9" value="{{ $tgl_9 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">005/</button>
                      </div>
                      <input type="text" class="form-control" name="no_9" id="no_9" value="{{ $no_9 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_10" id="tgl_10" value="{{ $tgl_10 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_10" id="no_10" value="{{ $no_10 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_11" id="tgl_11" value="{{ $tgl_11 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_11" id="no_11" value="{{ $no_11 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_12" id="tgl_12" value="{{ $tgl_12 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_12" id="no_12" value="{{ $no_12 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_13" id="tgl_13" value="{{ $tgl_13 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_13" id="no_13" value="{{ $no_13 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_14" id="tgl_14" value="{{ $tgl_14 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_14" id="no_14" value="{{ $no_14?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_15" id="tgl_15" value="{{ $tgl_15 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_15" id="no_15" value="{{ $no_15 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_16" id="tgl_16" value="{{ $tgl_16 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>


            </td>
        </tr>

        <tr>
            <td>17</td>
            <td>Surat Perjanjian Kerja (Kontrak)</td>
            <td>PPK</td>
            <td><input class="form-control" type="text" name="tgl_17" id="tgl_17" value="{{ $tgl_17 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_17" id="no_17" value="{{ $no_17 ?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_18" id="tgl_18" value="{{ $tgl_18 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-default">602.1/</button>
                      </div>
                      <input type="text" class="form-control" name="no_18" id="no_18" value="{{ $no_18?? '' }}">
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
            <td><input class="form-control" type="text" name="tgl_19" id="tgl_19" value="{{ $tgl_19 ?? '' }}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask ></td>
            <td>


            </td>
        </tr>

    </tbody>
</table>