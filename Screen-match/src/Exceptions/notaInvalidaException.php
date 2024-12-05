<?php 

class NotaInvalidaException extends \InvalidArgumentException {
    public function __construct() {
         parent::__construct('Nota precisa ser maior que 0 e menor que 10.');
    }
};