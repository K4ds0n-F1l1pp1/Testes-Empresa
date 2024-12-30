<?php 

namespace TESTESEPRESA\Arquitetura;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if (!filter_var($endereco, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Endereço de email inválido.");
        }
        $this->endereco = $endereco;
    }

    public function toString(): string
    {
        return $this->endereco;
    }
}
?>
