<?php
namespace App\Tests\Core;

use Yii;

class AliasTest extends \PHPUnit_Framework_TestCase
{
	public function testBowerAlias() {
		return $this->assertNotEmpty(Yii::getAlias('@bower'));
	}
}