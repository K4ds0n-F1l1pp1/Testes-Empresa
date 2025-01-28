class Cliente {
    nome;
    cpf;
    rg;
    agencia;
}

class ContaCorrente {
    agencia;
    #saldo = 0;

    sacar(valor) {
        if (this.#saldo >= valor) {
            this.#saldo -= valor;
            console.log("Saque efetuado com sucesso");
        } else {
            console.log("Saldo insuficiente");
        }
    }

    depositar(valor) {
        if (valor > 0) {
            this.#saldo += valor;
            console.log("Depósito efetuado com sucesso");
        } else {
            console.log("Valor de depósito inválido");
        }
    }

    getSaldo() {
        return this.#saldo;
    }
}

const cliente1 = new Cliente();
const cliente2 = new Cliente();

cliente1.nome = "Ricardo";
cliente1.cpf = 12345678090;
cliente1.rg = 1234567;
cliente1.agencia = 1001;

const contaCorrente9090 = new ContaCorrente();
contaCorrente9090.agencia = 1010;
console.log(contaCorrente9090);

contaCorrente9090.depositar(400);
console.log("Saldo atual:", contaCorrente9090.getSaldo());

contaCorrente9090.sacar(200);
console.log("Saldo atual:", contaCorrente9090.getSaldo());

console.log(cliente1);