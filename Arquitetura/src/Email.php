<php 

namespace Alura\Arquitetura;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if () {
            throw new \InvalidArgumentException("Endereço de email inválido.");
        }
        $this->endereco = $endereco;
    }
}