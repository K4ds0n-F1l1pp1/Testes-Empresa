<?php 

namespace TESTESEPRESA\Arquitetura;

class Aluno
{
    private CPF $cpf;
    private string $nome;
    private Email $email;
    private array $telefones = [];

    public function __construct(CPF $cpf, Email $email, string $nome)
    {
        $this->cpf = $cpf;
        $this->email = $email;
        $this->nome = $nome;
    }

    public function adicionarTelefone(Telefone $telefone): void
    {
        $this->telefones[] = $telefone;
    }

    public function obterTelefones(): array
    {
        return $this->telefones;
    }
}

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        if (!preg_match('/^\d{2}$/', $ddd)) {
            throw new \InvalidArgumentException('DDD inválido.');
        }

        if (!preg_match('/^\d{8,9}$/', $numero)) {
            throw new \InvalidArgumentException('Número de telefone inválido.');
        }

        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "($this->ddd) $this->numero";
    }
}
?>