<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index() 
    //tabla con los productos CRUD)
    //view
    {
        echo "Tabla de productos";
    }

    public function create()
    {
        //formulario con los campos para crear el producto
        //view
        echo "Formulario con los campos para crear el producto";
    }

    public function save($producto)
    {
        //Algoritmo para almacenar el producto en la bvase de datos
        echo "Algoritmo para almacenar el producto en la bvase de datos";
        //redirect: al index o al show con mensaje de creado exitosamente
    }
    public function edit($id) 
    //Formulario con los campos para editar un producto
    //view
    {
        echo "Formulario con los campos para editar un producto";
    }

    public function update($producto)
    {
        //el algoritmo para editar un producto en la base de datos
        //redirect:  al index con mensaje de producto editado exitosamente
        echo "el algoritmo para editar un producto en la base de datos";
    }

    public function show($id)
    {
        //Muestra los datos de un producto en especifico
        //view
        echo "Muestra los datos de un producto en especifico";
    }

    public function delete($id)
    {
        //elimina un producto
        //redirect al index con mensaje de producto eliminado
        echo "Elimina un producto";
    }

    //abajo agregar cosas más especificas

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