<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSomaDoisNumeros()
    {
        $soma = new Soma();
        $soma->setNum1(10);
        $soma->setNum2(20);

        //Exemplo de Teste com sucesso
        $this->assertEquals(30, $soma->somar()); //espera que o retorno seja 30 do método somar da classe Soma
    
        //Exemplo de teste que retorna falha
        $this->assertEquals(40, $soma->somar());
    }
}