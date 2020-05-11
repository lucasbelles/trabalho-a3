<?php
    class Produto{
        // Atributos ou características
        public $id;
        public $nome, $preco, $quantidade;


        // Métodos ou ações
        public function __construct($id = NULL, $nome = NULL, $preco = NULL, $qtd = NULL)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $qtd;      
        }

        public function imprimirNomePreco(){
            echo "Nome: ".$this->nome."<br>";
            echo "Preço: ".$this->preco."<br>";
        }
        public function atualizarPreco($percentual = 0){
            $novo_preco = $this->preco + ($this->preco * $percentual / 100);
            $this->preco = $novo_preco; 
        }

        public function consultarNovoPreco($percentual = 0){
            $novo_preco = $this->preco + ($this->preco * $percentual / 100);
            return $novo_preco;
        }
    }
?>