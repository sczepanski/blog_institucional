<?php

namespace App\Models;

use App\Enums\TipoCategoriaEnum;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postagem extends Model
{
    
    use SoftDeletes, Timestamp;
    protected $table = 'postagens';
    protected $fillabe = [
        'titulo',
        'slug',
        'conteudo',
        'categoria',
        'imagem_id',
        'user_id',
        'data_publicacao',
    ];

    protected $casts = [
        'categoria' => TipoCategoriaEnum::class,
    ];
    
    public function imagem()
    {
        return $this->belongsTo(Imagem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
