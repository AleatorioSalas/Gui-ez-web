<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'usuarios_guiñez'; // Nombre de la tabla
    protected $primaryKey = 'ID_Nombre';  // Llave primaria personalizada
    public $incrementing = false;         // Si la llave primaria no es autoincremental
    protected $keyType = 'string';        // Cambia esto si el tipo de la llave primaria no es 'string'

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // En UsuarioGuiñez.php
        public function bams()
        {
         return $this->hasMany(Bam::class, 'iD_Nombre', 'ID_Nombre');
        }
        public function celular()
        {
         return $this->hasMany(celular::class, 'ID_Nombre', 'id');
        }
        public function monitor()
        {
         return $this->hasMany(monitor::class, 'ID_Nombre', 'id');
        }
}
