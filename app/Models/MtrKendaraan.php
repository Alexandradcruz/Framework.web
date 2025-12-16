<?php  

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MtrKendaraan extends Model
{
    protected $table = 'mtr_kendaraan';

    protected $fillable = [
        'model_id',
        'warna_id',
        'cc',
        'no_mesin',
        'no_rangka'
    ];

    public function model()
    {
        return $this->belongsTo(MtrModel::class, 'model_id');
    }

    public function warna()
    {
        return $this->belongsTo(MtrWarna::class, 'warna_id');
    }
}
