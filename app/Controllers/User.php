<?php

namespace App\Controllers;

class User extends BaseController
{
    public function list()
    {
        echo "Lista de amigos";
    }

    public function AdminList()
    {
        echo "Panel de control para agregar y quitar usuarios";
    }
}