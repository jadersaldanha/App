<?php

use App\Dominio;
use PHPUnit\Framework\TestCase;

class DominioTest extends TestCase
{
    protected $dominio;

    public function setUp()
    {
        $this->dominio = new Dominio("www. teste.com");
    }

    public function testValidaDominioVazio()
	{
		$this->assertFalse($this->dominio->validaDominioVazio());
    }
    
    public function testretiraEspacos()
	{
        $this->assertContains($this->dominio->retiraEspacos(), 'www.teste.com');
    }

    public function testminimoCaracteres()
	{
        $this->assertTrue($this->dominio->minimoCaracteres());
    }

    public function testmaximoCaracteres()
	{
	    $this->assertTrue($this->dominio->maximoCaracteres());
    }

    public function testsomenteNumeros()
	{
	    $this->assertFalse($this->dominio->somenteNumeros());
    }

    public function testverificarDominioRegistrado()
	{
	 	$this->assertTrue($this->dominio->verificarDominioRegistrado());
    }
    
}
