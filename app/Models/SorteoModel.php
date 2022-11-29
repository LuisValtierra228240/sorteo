<?php
namespace App\Models;
use CodeIgniter\Model;

class SorteoModel extends Model
{
    protected $table = 'sorteos';

    protected $primarykey = 'id';

    protected $allowedFields = [
        'nombre',
        'idGanador',
        'fecha',
        'creacion',
        'precio',
        'premio',
        'descripcion',
        'idCreador',
        'imagen',
        'cantidadBoletos'
    ];
}