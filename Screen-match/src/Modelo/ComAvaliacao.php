<?php

namespace ScreenMatch\Modelo;

use NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        /**
         * @throws \InvalidArgumentException Se a nota for menor que 0 e maior que 10.
         */
        if ($nota < 0 && $nota > 10) {
            throw  new \InvalidArgumentException('Nota precisa ser maior que 0 e menor que 10.');
        } 
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
