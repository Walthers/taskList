<?php
namespace App\Helpers;

class Functions
{
    public function getStatusConvert($status)
    {
        return $status == "on" ? "Completado" : "Não completado";
    }
}
