<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;

class Assistidor
{
    public function assistir(Curso $conteudo)
    {
        $conteudo->assistir();
    }

}
