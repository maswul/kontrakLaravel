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
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JTermin query()
 */
	class JTermin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lelang
 *
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|Lelang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lelang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lelang query()
 */
	class Lelang extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pekerjaan
 *
 * @property-read \App\Models\JTermin|null $jtermin
 * @property-read \App\Models\Lelang|null $lelang
 * @property-read \App\Models\Perusahaan $perusahaan
 * @property-read \App\Models\TerminFisik|null $terminfisik
 * @property-read \App\Models\TerminPengawasan|null $terminpengawasan
 * @property-read \App\Models\TerminPerencanaan|null $terminperencanaan
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerjaan query()
 */
	class Pekerjaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Perusahaan
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pekerjaan[] $pekerjaan
 * @property-read int|null $pekerjaan_count
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perusahaan query()
 */
	class Perusahaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TerminFisik
 *
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|TerminFisik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminFisik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminFisik query()
 */
	class TerminFisik extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TerminPengawasan
 *
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPengawasan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPengawasan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPengawasan query()
 */
	class TerminPengawasan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TerminPerencanaan
 *
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPerencanaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPerencanaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TerminPerencanaan query()
 */
	class TerminPerencanaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\termyn
 *
 * @property-read \App\Models\Pekerjaan $pekerjaan
 * @method static \Illuminate\Database\Eloquent\Builder|termyn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|termyn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|termyn query()
 */
	class termyn extends \Eloquent {}
}

