<?php

class LocaleTest extends AimeosTestAbstract
{
	public function testGetBackend()
	{
		$mock = $this->createStub( '\Illuminate\Config\Repository' );
		$context = $this->app->make( '\Aimeos\Shop\Base\Context' )->get( false, 'backend' );

		$object = new \Aimeos\Shop\Base\Locale( $mock );

		$this->assertInstanceOf( '\Aimeos\MShop\Locale\Item\Iface', $object->getBackend( $context, 'unittest' ) );
	}
}
