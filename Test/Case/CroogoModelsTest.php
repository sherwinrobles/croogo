<?php
App::uses('CroogoTestCase', 'Croogo.TestSuite');

class CroogoModelsTest extends PHPUnit_Framework_TestSuite {

	public static function suite() {
		$suite = new CakeTestSuite('Croogo model tests');
		$path = APP . 'Test' . DS . 'Case' . DS . 'Model' . DS;
		$suite->addTestDirectory($path);
		return $suite;
	}

}
