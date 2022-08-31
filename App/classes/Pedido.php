<?php 

namespace App\classes;

class Pedido {
    
    private float $valor;

    public function getValor(){
        return $this->valor;
    }

    public function setValor(float $valor){
       $this->valor = $valor;
    }

    public function calcularFreteComum(){
        return $this->valor * 0.05;
    }

    public function calcularFreteExpresso(){
        return $this->valor * 0.1;
    }
  
}