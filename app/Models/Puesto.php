<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
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
        'puesto',
        'lugar',
        'salario',
        'tipo_empleo',
        'turno',
        'descripcion',
        'experiencia',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

     public function user()
    {

        return $this->belongsTo(User::class,'user_id','idPuestoTrabajo');
    }
}