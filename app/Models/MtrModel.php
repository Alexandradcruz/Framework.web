<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MtrKendaraan;

class MtrModel extends Model
{
    protected $table = 'mtr_model';
    protected $fillable = ['model', 'harga'];

    public function kendaraan()
    {
        return $this->hasMany(MtrKendaraan::class, 'model_id');
    }
}
