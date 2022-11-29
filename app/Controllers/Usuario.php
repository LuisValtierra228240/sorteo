<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
class Usuario extends BaseController
{

    private $usuarioModel;
    
    function __construct() {
        $this->usuarioModel = new UsuarioModel();
    }
    
    public function index()
    {
        $usuarios = $this->usuarioModel->findAll();
        
        $data = [
            "usuarios" =>$usuarios
        ];

        return view("/usuarios/index", $data);

    }

    public function create()
    {
        return view("/usuarios/create");
    }

    public function store()
    {
        $usuario = [
            "nombre"=> $this->request->getPost("nombre"),
            "apellidos"=> $this->request->getPost("apellidos"),
            "telefono"=> $this->request->getPost("telefono"),
            "contrasena"=> $this->request->getPost("contrasena"),
            "correo"=> $this->request->getPost("correo"),
            "estado"=> $this->request->getPost("estado"),
            "ciudad"=> $this->request->getPost("ciudad"),
            "direccion"=> $this->request->getPost("direccion"),
        ];
        $this->usuarioModel ->insert($usuario);
        return redirect()->to("/usuario?m=usuario ".$usuario["nombre"]." creado correctamente");
    }

    public function edit($id) 
    {
    $usuario = $this->usuarioModel->find($id);
    $data = [
        "usuario" => $usuario
            ];

    return view("/usuarios/edit", $data);
    }
    
    public function update($id)
    {
        $usuario = [
            "nombre"=> $this->request->getPost("nombre"),
            "apellidos"=> $this->request->getPost("apellidos"),
            "telefono"=> $this->request->getPost("telefono"),
            "contrasena"=> $this->request->getPost("contrasena"),
            "correo"=> $this->request->getPost("correo"),
            "estado"=> $this->request->getPost("estado"),
            "ciudad"=> $this->request->getPost("ciudad"),
            "direccion"=> $this->request->getPost("direccion"),
        ];
        $this->usuarioModel ->update($id, $usuario);
        return redirect()->to("/usuario?m=usuario ".$usuario["nombre"]." editado correctamente");
    }

    public function show($id)
    {
        $usuario = $this->usuarioModel->find($id);
        $data = [
            "usuario" => $usuario
        ];
        return view("/usuarios/show", $data);
    }

    public function delete($id)
    {
        $this->usuarioModel->delete($id);
        return redirect()->to("/usuario?m=usuario eliminado correctamente");
    }

    
}