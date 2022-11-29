<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';

    protected $primarykey = 'id';

    protected $allowedFields = [
        'nombre',
        'imagen',
        'marca',
        'precio',
        'codigo'
    ];

    public function findByFields($marca)
    {
        $productos = $this-> asArray()
                        ->where(['marca' => $marca])
                        ->all();
    }

    public function filtro($nombre, $marca, $codigo)
    {

        $where = [];
        
        if(!empty($nombre) or $nombre!=0){
            $where["nombre"] = $nombre;
        }

        if(!empty($marca) or $marca!=0){
            $where["marca"] = $marca;
        }

        if(!empty($codigo) or $codigo!=0){
            $where["codigo"] = $codigo;
        }

        return $this->asArray()->where($where)->findAll();
    }

}