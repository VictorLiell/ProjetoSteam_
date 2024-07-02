<?php

namespace App\Models;
use App\Models\Distribuidora;
use App\Models\Genero;
use App\Models\Jogo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';
    protected $fillable = [
        'nome',
        'descricao',
        'requisitos',
        'imagens',
        'avaliacao',
        'data_lancamento',
        'distribuidoras_id',
        'genero_id',
    ];

    public function distribuidora()
    {
        return $this->belongsTo(Distribuidora::class, 'distribuidoras_id');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }
}
