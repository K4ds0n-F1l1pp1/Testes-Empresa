<?php

namespace Alura\Arquitetura;

class CPF
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }

    private function setNumero(string $numero): void
    {
        $padrao = '/^\d{3}\.\d{3}\.\d{3}-\d{2}$/';
        if (!preg_match($padrao, $numero)) {
            throw new \InvalidArgumentException('O CPF informado não é válido.');
        }

        $this->numero = $numero;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
}
