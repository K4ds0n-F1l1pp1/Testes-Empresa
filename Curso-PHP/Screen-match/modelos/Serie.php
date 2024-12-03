<?php 

class Serie extends Titulo {
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public int $numeroTemporadas,
        public int $numeroEpisodios,
        public int $minutosPorEpisodio,
    ) {
        parent::__construct($nome, $anoLancamento, $genero);   
    }

    public function duracaoEmMinutos(): int {
        return $this->numeroTemporadas * $this->numeroEpisodios * $this->minutosPorEpisodio;
    }
}