<?php

namespace App\Controllers;

use App\Models\ParticipanteModel;
use App\Models\UsuarioModel;

class Participante extends BaseController
{

    private $participanteModel;
    private $usuarioModel;
    
    function __construct() {

        $this->participanteModel = new participanteModel();
        $this->usuarioModel = new usuarioModel();
    }
    
    public function index()
    {

        $usuarios = $this->usuarioModel->findAll();
        $participantes = $this->participanteModel->findAll();
        
        $data = [
            "usuarios" =>$usuarios,
            "participantes" =>$participantes
        ];

        return view("/participantes/index", $data);

    }

    public function create()
    {

        $usuarios = $this->usuarioModel->findAll();

        $data = [
            "usuarios" =>$usuarios
        ];

        return view("/participantes/create", $data);
    }

    public function store()
    {
        $participante = [
            "boleto"=> $this->request->getPost('boleto'),
            "idSorteo"=> $this->request->getPost('idSorteo'),
            "idUsuario"=> $this->request->getPost('nombre'),
            "estadoPago"=> $this->request->getPost('estadoPago'),
            "cantidadPago"=> $this->request->getPost('cantidadPago'),
            "fechaCompra"=> $this->request->getPost('fechaCompra')
        ];


        $this->participanteModel ->insert($participante);

        return redirect()->to("/participante?m=participante ".$participante["nombre"]." creado correctamente");

    }
    public function edit($id) 
    {
    $participante = $this->participanteModel->find($id);
    $data = [
        "participante" => $participante
            ];

    return view("/participantes/edit", $data);
    

        echo "Formulario con los campos para editar un participante";
    }

    public function update($id)
    {
        $participante = [
            "boleto"=> $this->request->getPost('boleto'),
            "idSorteo"=> $this->request->getPost('idSorteo'),
            "idUsuario"=> $this->request->getPost('nombre'),
            "estadoPago"=> $this->request->getPost('estadoPago'),
            "cantidadPago"=> $this->request->getPost('cantidadPago'),
            "fechaCompra"=> $this->request->getPost('fechaCompra')
        ];

        $this->participanteModel ->update($id, $participante);
        return redirect()->to("/participante?m=participante ".$participante["nombre"]." editado correctamente");

    }

    public function show($id)
    {
        $participante = $this->participanteModel->find($id);
        $data = [
            "participante" => $participante
        ];
        return view("/participantes/show", $data);
        
    }

    public function delete($id)
    {

        $this->participanteModel->delete($id);
        return redirect()->to("/participante?m=participante eliminado correctamente");

    }


    public function filtro($nombre = "", $marca = "", $codigo = "")
    {

        $participantes = $this->participanteModel ->filtro($nombre, $marca, $codigo);
        return $this -> response ->setJSON($participantes);
    }
}