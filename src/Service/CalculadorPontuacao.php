<?php

namespace Alura\Solid\Service;

use DomainException;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\AluraMais;

class CalculadorPontuacao
{
    public function recuperarPontuacao($conteudo)
    {
        if ($conteudo instanceof Curso) {
            return 100;
        } else if ($conteudo instanceof AluraMais) {
            return $conteudo->minutosDeDuracao() * 2;
        } else {
            throw new DomainException('Apenas Cursos e videos Alura+ possuem pontuações');
        }
    }
}
