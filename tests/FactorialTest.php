<?php
use PHPUnit\Framework\TestCase;
use App\Factorial;


class FactorialTest extends TestCase {
    public function testFactorial() {
    $calc = new Factorial();
    $resultado = $calc -> calcularFactorial(5);
    $this -> assertEquals(120, $resultado);
    }
    
}
