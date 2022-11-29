<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{

    //F2 crear variable en la clase
    private $productoModel;
    
    function __construct() {
        //F2 inicializar la variable con un modelo
        $this->productoModel = new ProductoModel();
    }
    
    public function index()
    {
        //F1 $productoModel = new ProductoModel();
        //F1 $productos = productoModel->findAll();
        //F2 usar las propiedades del modelo en todas las funciones
        $productos = $this->productoModel->findAll();
        
        $data = [
            "productos" =>$productos
        ];

        return view("/productos/index", $data);

        //echo"<pre>"; print_r($productos); echo"</pre>";
    }

    public function create()
    {
        //formulario con los campos para crear el producto
        //view
        //echo "Formulario con los campos para crear el producto";
        return view("/productos/create");
    }

    public function store()
    {
        $producto = [
            "nombre"=> $this->request->getPost('nombre'),
            "precio" => $this->request->getPost('precio'),
            "marca" => $this->request->getPost('marca'),
            "codigo" => $this->request->getPost('codigo'),
            "imagen" => $this->request->getPost('imagen'),
        ];

        //regresa el ID del producto creado.
        $this->productoModel ->insert($producto);

        return redirect()->to("/producto?m=producto ".$producto["nombre"]." creado correctamente");
        //Algoritmo para almacenar el producto en la base de datos
        //echo "Algoritmo para almacenar el producto en la base de datos";
        //redirect: al index o al show con mensaje de creado exitosamente
    }
    public function edit($id) 
    {
    $producto = $this->productoModel->find($id);
    $data = [
        "producto" => $producto
            ];

    return view("/productos/edit", $data);
    
    //Formulario con los campos para editar un producto
    //view

        echo "Formulario con los campos para editar un producto";
    }

    public function update($id)
    {
        $producto = [
            "nombre"=> $this->request->getPost("nombre"),
            "precio" => $this->request->getPost("precio"),
            "marca" => $this->request->getPost("marca"),
            "codigo" => $this->request->getPost("codigo"),
            "imagen" => $this->request->getPost("imagen"),
        ];

        $this->productoModel ->update($id, $producto);
        return redirect()->to("/producto?m=producto ".$producto["nombre"]." editado correctamente");
        //return redirect()->to("/producto?m=producto $producto["nombre"] , editado correctamente");

        //el algoritmo para editar un producto en la base de datos
        //redirect:  al index con mensaje de producto editado exitosamente
        //echo "el algoritmo para editar un producto en la base de datos";
    }

    public function show($id)
    {
        $producto = $this->productoModel->find($id);
        $data = [
            "producto" => $producto
        ];
        return view("/productos/show", $data);
        //echo"<pre>"; print_r($productos); echo"</pre>";
    }

    public function delete($id)
    {
        //elimina un producto
        //redirect al index con mensaje de producto eliminado

        $this->productoModel->delete($id);
        return redirect()->to("/producto?m=producto eliminado correctamente");

        //echo "Elimina un producto";
    }

    //abajo agregar cosas más especificas

    public function filtro($nombre = "", $marca = "", $codigo = "")
    {

        $productos = $this->productoModel ->filtro($nombre, $marca, $codigo);
        //echo "<pre>";
        //print_r($productos);
        //echo "</pre>";
        
        //echo json_encode($productos);
        return $this -> response ->setJSON($productos);
    }

    public function list($marca = "", $color="",$precio=0) //Ajax
    {
        //Muestra lista de productos pero con diferentes filtros, como marco, color, precio, etc
        //json
    }

    /*

    public function oldindex()
    {
        echo "estoy en el index!!!!";
    }

    public function lista()
    {
        echo "Lista de productos...";
    }

    public function producto($id)
    {
        echo "datos del producto con el id: $id";
    }

    public function create($nombre, $precio, $marca){
        echo "Producto: $nombre de la marca $marca, cuesta: $$precio. Creado de manera exitosa";
    }
    */
}