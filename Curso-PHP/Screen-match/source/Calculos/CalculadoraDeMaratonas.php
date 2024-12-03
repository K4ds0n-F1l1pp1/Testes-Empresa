<?php 

class CalculadoraDeMaratona {
    private int $duracaoMaratona;

    public function inclui(Titulo $titulo): void {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int {
        return $this->duracaoMaratona;
    }
}