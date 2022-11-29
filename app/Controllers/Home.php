<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        session_start();
        //return view('welcome_message');
        return view('admin/plantillas/general');
    }

    //Texto puro
    public function saludar($nombre = "Hola Mundo")
    {
        echo "saludar";
    }

    //Mostramos view de HTML
    public function saludar2($nombre = "World", $titulo = "Pagina Principal", $color = "f00")
    {
        $data=[
            "nombre" => $nombre,
            "titulo" => $titulo,
            "color" => $color
        ];
        return view("saludar",$data);
    }

    //redireccionar
    public function cerrarSesion()
    {
        //Logica para eliminar sesión
        session_start();
        session_destroy();
        return redirect()->to("/home");
        
    }

    public function login()
    {
        $_SESSION["nombre"] = "Luis";
        return redirect()->back();

    }

    public function sorteos()
    {
        $sorteos = [];

        $sorteos[] = [
        "titulo" => "carne asada y 1000",
        "precio"=>50,
        "fecha" => "10/08/2022"
        ];

        $sorteos[] = [
        "titulo" => "posole y 300",
        "precio"=>100,
        "fecha" => "25/12/2022"
        ];

        $sorteos[] = [
        "titulo" => "cerveza",
        "precio"=>10,
        "fecha" => "25/10/2022"
        ];
        $sorteos[] = [
        "titulo" => "sorteo Itson",
        "precio"=>750,
        "fecha" => "5/12/2022"
        ];

        $data = [
            "sorteos" => $sorteos
        ];

        echo json_encode($data);
    }
}
