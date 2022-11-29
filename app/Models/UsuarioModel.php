<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';

    protected $primarykey = 'id';

    protected $allowedFields = [
        'nombre',
        'telefono',
        'correo',
        'direccion',
        'contrasena',
        'foto'
    ];
}