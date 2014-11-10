<?php
class InvestigadorTest extends PHPUnit_Framework_TestCase
{
	 public function testCreate()
	 {
	 	$investigador= new Investigador;
	 	$investigador->Nombres="Pedro";
	 	$investigador->Apellidos="Perez";
	 	$investigador->Tipo_Documento="cedula";
	 	$investigador->Numero_Documento=1094941728;
	 	$investigador->Nacionalidad="colombiano";
	 	$investigador->Datos_contacto="3163360477";
	 	$investigador->Evaluador="0";
	 	$this->assertTrue($investigador->save());
	 }

	 public function testBuscar()
	 {
	 	$investigador = new Investigador;
	 	$aux = $investigador->findByPk(1094941728);
	 	$this->assertNotNull($aux);
	 }

	 public function testEliminar(){
	 	$investigador = new Investigador;
	 	$aux = $investigador->findByPk(1094941728);
	 	$aux->delete();
	 	$aux = $investigador->findByPk(1094941728);
	 	$this->assertNull($aux);
	 }
}
?>