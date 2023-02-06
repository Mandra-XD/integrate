<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    protected $table = 'puesto_trabajo';
    protected $primary_key = 'idPuestoTrabajo';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'idPuestoTrabajo'
        'puesto',
        'lugar',
        'salario',
        'tipo_empleo',
        'turno',
        'descripcion',
        'experiencia',
    ];
}
