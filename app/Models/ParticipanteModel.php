<?php
namespace App\Models;
use CodeIgniter\Model;

class ParticipanteModel extends Model
{
    protected $table = 'participantes';

    protected $primarykey = 'id';

    protected $allowedFields = [
        'boleto',
        'idSorteo',
        'idUsuario',
        'estadoPago',
        'cantidadPago',
        'fechaCompra'
    ];
}