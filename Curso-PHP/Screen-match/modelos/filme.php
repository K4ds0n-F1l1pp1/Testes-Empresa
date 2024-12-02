<?php 

class Filme {
    // private string $nome;
    // private int $anoLancamento;
    // private string $genero;
    // private float $media;
    private array $notas;

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private string $genero,

    ) {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
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

    public function anoLancamento (): int {
        return $this->anoLancamento;
    }

    public function nome (): string {
        return $this->nome;
    }

    public function genero (): string {
        return $this->genero;
    }
};