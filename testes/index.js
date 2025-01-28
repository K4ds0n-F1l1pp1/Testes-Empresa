import {Cliente} from './Clientes.js'; // Aqui você trás uma classe ou arquivo externo.
import {ContaCorrente} from './ContaCorrente.js';

const cliente1 = new Cliente("Kadson", 1368487927);

const cliente2 = new Cliente("Bottin", 2611811141);

const contaCorrente9090 = new ContaCorrente();
contaCorrente9090.agencia = 1001;
contaCorrente9090.cliente = cliente1;

contaCorrente9090.depositar(100);
contaCorrente9090.depositar(100);
console.log(contaCorrente9090);
// const valorSacado = contaCorrente9090.sacar(50);

//......................................................................\\

const contaCorrente9091 = new ContaCorrente();
contaCorrente9091.agencia = 1010;
contaCorrente9091.cliente = cliente2;

contaCorrente9090.transferir(100, contaCorrente9091);

console.log(contaCorrente9091);
console.log(contaCorrente9090);
