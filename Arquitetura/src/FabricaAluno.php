<?php

namespace TESTESEPRESA\Arquitetura;

class FabricaAluno
{
    private Aluno $aluno;

    public function comCPFEmailNome(string $numeroCPF, string $email, string $nome): self
    {
        $this->aluno = new Aluno(new cpf($numeroCPF), new Email($email), $nome);
        return $this;
    }

    public function comTelefone(string $ddd, string $numero): self
    {
        $this->aluno->adicionarTelefone(new Telefone($ddd, $numero));
        return $this;
    }

    public function aluno(): Aluno
    {
        return $this->aluno;
    }
}