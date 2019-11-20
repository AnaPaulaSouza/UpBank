<?php
    class ContaCorrente{

        private $titular;
        private $agencia;
        private $conta;        
        private $saldo;
    
        public function __construct($titular, $agencia, $conta, $saldo){
            $this->titular = $titular;
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->saldo = $saldo;
        }

        public function sacar($valor){
            $this->saldo = $this->saldo - $valor; 
            return $this;
        }

        public function depositar($valor){
            $this->saldo = $this->saldo + $valor;
            return $this;
        }

        public function transferir($valor, ContaCorrente $contaCorrente){
            
            if(!is_numeric($valor)){
                throw new Exception("O valor passado não é um número!");
            }
            $this->sacar($valor);
            $contaCorrente->depositar($valor);
            return $this;
        }

        public function __get($atributo){
            $this->protegeAtributo($atributo);
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->protegeAtributo($atributo); 
            $this->$atributo = $valor;
        }

        private function protegeAtributo($atributo){
            if($atributo == "titular" || $atributo == "saldo"){
                throw new Exception("Continua não podendo ser alterado");
            }
        }

        public function getTitular(){
            return $this->titular;
        }
        
    
    }
