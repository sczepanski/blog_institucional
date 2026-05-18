<?php

namespace App\Models;

use App\Enums\TipoImagemEnum;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagem extends Model
{
    use SoftDeletes, Timestamp;
    protected $table = 'imagens';
    protected $fillable = [
        'nome', 
        'caminho', 
        'tipo'
    ];

    protected $casts = [
        'tipo' => TipoImagemEnum::class,
    ];
    
}
