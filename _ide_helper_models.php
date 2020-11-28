<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\JTermin
 *
 * @property int $id
 * @property int $pekerjaan_id
 * @property int|null $no_spk
 * @property int|null $no_ba_lapdal
 * @property int|null $no_ba_lapkhir
 * @property int|null $no_bast_lapdal
 * @property int|null $no_bast_lapkhir
 * @property int|null $no_bast_pekerjaan
 * @property int|null $no_bast_pembayaran
 * @property string|null $tgl_spk
 * @property string|null $tgl_ba_lapdal
 * @property string|null $tgl_ba_lapkhir
 * @property string|null $tgl_bast_lapdal
 * @property string|null $tgl_bast_lapkhir
 * @property string|null $tgl_bast_pekerjaan
 * @property string|null $tgl_bast_pembayaran
 * @property string|null $tgl_0
 * @property string|null $tgl_1
 * @property string|null $no_1
 * @property string|null $tgl_2
 * @property string|null $no_2
 * @property string|null $tgl_3
 * @property string|null $no_3
 * @property string|null $tgl_4
 * @property string|null $no_4
 * @property string|null $tgl_5
 * @property string|null $no_5
 * @property string|null $tgl_6
 * @property string|null $no_6
 * @property string|null $tgl_7
 * @property string|null $no_7
 * @property string|null $tgl_8
 * @property string|null $no_8
 * @property string|null $tgl_9
 * @property string|null $no_9
 * @property string|null $tgl_10
 * @property string|null $no_10
 * @property string|null $tgl_11
 * @property string|null $no_11
 * @property string|null $tgl_12
 * @property string|null $no_12
 * @property string|null $tgl_13
 * @property string|null $no_13
 * @property string|null $tgl_14
 * @property string|null $no_14
 * @property string|null $tgl_15
 * @property string|null $no_15
 * @property string|null $tgl_16
 * @property string|null $tgl_17
 * @property string|null $no_17
 * @property string|null $tgl_18
 * @property string|null $no_18
 * @property string|null $tgl_19
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin query()
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNo9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBaLapdal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBaLapkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBastLapdal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBastLapkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBastPekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoBastPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereNoSpk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin wherePekerjaanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl19($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTgl9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBaLapdal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBaLapkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBastLapdal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBastLapkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBastPekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglBastPembayaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereTglSpk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin whereUpdatedAt($value)
 */
	class JTermin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pekerjaan
 *
 * @property int $id
 * @property int $perusahaan_id
 * @property string $program
 * @property string $kegiatan
 * @property string $pekerjaan
 * @property int $tipe
 * @property string $tahun
 * @property string $kode_rek
 * @property string $kode_keg
 * @property string $dpa_skpd
 * @property int $hps
 * @property int $penawaran
 * @property int $nego
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JTermin|null $jtermin
 * @property-read \App\Models\Perusahaan $perusahaan
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereDpaSkpd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereHps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereKegiatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereKodeKeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereKodeRek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereNego($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan wherePenawaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan wherePerusahaanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereTipe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan whereUpdatedAt($value)
 */
	class Pekerjaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Perusahaan
 *
 * @property int $id
 * @property string $nama
 * @property string|null $direktur
 * @property string|null $npwp
 * @property string|null $bank
 * @property string|null $rekening
 * @property string|null $alamat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pekerjaan[] $pekerjaan
 * @property-read int|null $pekerjaan_count
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereDirektur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereNpwp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan whereUpdatedAt($value)
 */
	class Perusahaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

