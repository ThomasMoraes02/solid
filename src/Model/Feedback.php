<?php 
namespace Alura\Solid\Model;

use DomainException;

class Feedback
{
    private int $nota;

    private ?string $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    /**
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Get the value of depoimento
     */ 
    public function getDepoimento()
    {
        return $this->depoimento;
    }
}