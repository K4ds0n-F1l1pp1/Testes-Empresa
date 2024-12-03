<?php

class Titulo {
private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,

    ) {
        $this->notas = [];
    }

    function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    function media (): float {
        $somaNotas = array_sum(array: $this->notas);
        $qtdNotas = count(value: $this-> notas);

        return $somaNotas / $qtdNotas;
    }

    public function  duracaoEmMinutos(): int {
        return 0;
    }
}