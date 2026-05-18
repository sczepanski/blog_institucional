<?php

namespace App\Enums;

enum TipoCategoriaEnum: string
{
    CASE INSTITUCIONAL = 'institucional';
    CASE COMUNICADOS = 'comunicados';
    CASE NEGOCIOS = 'negocios';
    CASE LOCAL = 'local';
    CASE EVENTOS = 'eventos';
    CASE COMUNIDADE = 'comunidade';
    CASE INOVACAO = 'inovacao';

    public function descricao()
    {
        return match($this) {
            self::INSTITUCIONAL => 'Institucional',
            self::COMUNICADOS => 'Comunicados',
            self::NEGOCIOS => 'Negocios',
            self::LOCAL => 'Local',
            self::EVENTOS => 'Eventos',
            self::COMUNIDADE => 'Comunidade',
            self::INOVACAO => 'Inovação',
        };
    }
}
