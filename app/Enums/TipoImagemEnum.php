<?php

namespace App\Enums;

enum TipoImagemEnum: string
{
    case POSTAGEM   = 'postagem';
    case GALERIA    = 'galeria';

    public function descricao(): string
    {
        return match ($this) {
            self::POSTAGEM => 'Postagem',
            self::GALERIA  => 'Galeria',
        };
    }
}
