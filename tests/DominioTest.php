<?php

use App\Dominio;
use PHPUnit\Framework\TestCase;

class DominioTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->Average = new Dominio("www. teste.com");
    }

    public function testValidaDominioVazio()
	{
		$this->assertFalse($this->Average->validaDominioVazio());
    }
    
    public function testretiraEspacos()
	{
        $this->assertContains($this->Average->retiraEspacos(), 'www.teste.com');
    }

    public function testminimoCaracteres()
	{
        $this->assertTrue($this->Average->minimoCaracteres());
    }

    public function testmaximoCaracteres()
	{
	    $this->assertTrue($this->Average->maximoCaracteres());
    }

    public function testsomenteNumeros()
	{
	    $this->assertFalse($this->Average->somenteNumeros());
    }

    public function testverificarDominioRegistrado()
	{
	 	$this->assertTrue($this->Average->verificarDominioRegistrado());
    }
    
}
