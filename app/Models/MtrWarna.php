<?php  

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MtrWarna extends Model
{
    protected $table = 'mtr_warna';
    protected $fillable = ['warna'];

    public function kendaraan()
    {
        return $this->hasMany(MtrKendaraan::class, 'warna_id');
    }
}
