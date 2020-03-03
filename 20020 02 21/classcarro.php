<?php
    class carro{
        // lista de atributos
        private $cor;
        private $qtd_porta;
        private $velocidade_maxima;
        private $velocidade_atual;

        public function __construct($cor, $porta, $max){
            $this->cor = $cor;
            $this->qtd_porta = $porta;
            $this->velocidade_maxima = $max;
            $this->velocidade_atual = 0;
        }
        public function get_cor(){
            return($this->cor);
        }
        public function get_qtdporta(){
            return($this->qtd_porta);
        }
        public function get_velocidademaxima(){
            return($this->velocidade_maxima);
        }
        public function get_velocidadeatual(){
            return($this->velocidade_atual);
        }

        // lista de metodos

        public function acelerar($valor_aceleracao, $tempo){
            $this->velocidade_atual =
                $this->velocidade_atual + $valor_aceleracao*$tempo;
        }
        public function frear($valor_frenagem, $tempo){
            $this->velocidade_atual =
                $this->velocidade_atual - $valor_frenagem*$tempo;
        }
        public function virar($lado){
            
        }
    }
?>