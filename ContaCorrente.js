import {Cliente} from './Clientes.js';
export class ContaCorrente{
    agencia;
    _cliente;

    set cliente(novoValor){
        if (novoValor instanceof Cliente){
            this._cliente = novoValor;
        }   
    }

    get cliente(){
        return this._cliente;
    }

    _saldo = 0;

    get Saldo() {
        return this._saldo;
    }
    
    sacar(valor){
        if(this._saldo >= valor){
            this._saldo -= valor;
            return valor;
        }
    }

    depositar(valor){
        if(valor <= 0)
        {
            return;
        } 
        this._saldo += valor;           
    }

    transferir(valor, conta) {
        const valorSacado = this.sacar(valor);
        conta.depositar(valorSacado);
    } 
}