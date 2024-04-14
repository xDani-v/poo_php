<?php

trait latam
{
    public function bienvenida()
    {
        echo "Latam";
    }
}

trait eu
{
    public function despedir()
    {
        echo "Europa";
    }
}

trait bienvenido
{
    public function bienvenida()
    {
        echo "Bienvenido de clase bienvenido";
    }
}

trait despedida
{

    public function despedir()
    {
        echo "Adios de clase despedida";
    }
}

class ecuatoriano
{
    use latam, bienvenido {
        bienvenido::bienvenida insteadof latam;
    }
}
class español
{
    use eu, despedida {
        despedida::despedir insteadof eu;
    }
}
