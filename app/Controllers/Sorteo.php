<?php

namespace App\Controllers;

use App\Models\SorteoModel;

class Sorteo extends BaseController
{

    private $sorteoModel;
    
    function __construct() {

        $this->sorteoModel = new SorteoModel();
    }
    
    public function index()
    {

        $sorteos = $this->sorteoModel->findAll();
        
        $data = [
            "sorteos" =>$sorteos
        ];

        return view("/sorteos/index", $data);

    }

    public function create()
    {

        return view("/sorteos/create");
    }

    public function store()
    {
        $sorteo = [
            "nombre"=> $this->request->getPost('nombre'),
            "idGanador"=> $this->request->getPost('idGanador'),
            "fecha"=> $this->request->getPost('fecha'),
            "creacion"=> $this->request->getPost('creacion'),
            "precio"=> $this->request->getPost('precio'),
            "premio"=> $this->request->getPost('premio'),
            "descripcion"=> $this->request->getPost('descripcion'),
            "idCreador"=> $this->request->getPost('idCreador'),
            "imagen"=> $this->request->getPost('imagen'),
            "cantidadBoletos"=> $this->request->getPost('cantidadBoletos')
        ];


        $this->sorteoModel ->insert($sorteo);

        return redirect()->to("/sorteo?m=sorteo ".$sorteo["nombre"]." creado correctamente");

    }
    public function edit($id) 
    {
    $sorteo = $this->sorteoModel->find($id);
    $data = [
        "sorteo" => $sorteo
            ];

    return view("/sorteos/edit", $data);
    

        echo "Formulario con los campos para editar un sorteo";
    }

    public function update($id)
    {
        $sorteo = [
            "nombre"=> $this->request->getPost('nombre'),
            "idGanador"=> $this->request->getPost('idGanador'),
            "fecha"=> $this->request->getPost('fecha'),
            "creacion"=> $this->request->getPost('creacion'),
            "precio"=> $this->request->getPost('precio'),
            "premio"=> $this->request->getPost('premio'),
            "descripcion"=> $this->request->getPost('descripcion'),
            "idCreador"=> $this->request->getPost('idCreador'),
            "imagen"=> $this->request->getPost('imagen'),
            "cantidadBoletos"=> $this->request->getPost('cantidadBoletos')
        ];

        $this->sorteoModel ->update($id, $sorteo);
        return redirect()->to("/sorteo?m=sorteo ".$sorteo["nombre"]." editado correctamente");

    }

    public function show($id)
    {
        $sorteo = $this->sorteoModel->find($id);
        $data = [
            "sorteo" => $sorteo
        ];
        return view("/sorteos/show", $data);
        
    }

    public function delete($id)
    {

        $this->sorteoModel->delete($id);
        return redirect()->to("/sorteo?m=sorteo eliminado correctamente");

    }


    public function filtro($nombre = "", $marca = "", $codigo = "")
    {

        $sorteos = $this->sorteoModel ->filtro($nombre, $marca, $codigo);
        return $this -> response ->setJSON($sorteos);
    }
}