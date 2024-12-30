<?php

namespace Alura\Arquitetura;

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }

    private function setDdd(string $ddd): void
    {
        if (!preg_match('/^\d{2}$/', $ddd)) {
            throw new \InvalidArgumentException('DDD inválido.');
        }
        $this->ddd = $ddd;
    }

    private function setNumero(string $numero): void
    {
        if (!preg_match('/^\d{2}$/', $numero)) {
            throw new \InvalidArgumentException('Número de telefone inválido.');
        }

        $this->numero == $numero;
    }

    public function toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}
