<?php

namespace app\Clases;

use app\Interfaces\InterfazProveedorCorreo;

class ServicioCorreo
{
    private InterfazProveedorCorreo $proveedor; //crea un objeto de una clase que ha implementado la interfaz

    public function __construct(InterfazProveedorCorreo $proveedor)
    {
        $this->proveedor = $proveedor;
    }


    public function enviarCorreo(string $paraQuien, string $asunto, string $cuerpoMensaje): bool
    {
        return $this->proveedor->enviarCorreo(
            $paraQuien,
            $asunto,
            $cuerpoMensaje
        );
    }
}
