<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VeiculoModel extends Model
{
    protected $table = 'veiculo';
    protected $guarded = 'id';
    protected $fillable = ['nome', 'marca', 'modelo', 'tipo', 'potencia'];
    public $timestamps = false;
}
