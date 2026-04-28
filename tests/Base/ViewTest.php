<?php


class ViewTest extends AimeosTestAbstract
{
	public function testCreateNoLocale()
	{
		$config = $this->createStub( '\Illuminate\Config\Repository' );
		$i18n = $this->createStub( '\Aimeos\Shop\Base\I18n' );
		$support = $this->createStub( '\Aimeos\Shop\Base\Support' );

		$context = new \Aimeos\MShop\Context();
		$context->setConfig( new \Aimeos\Base\Config\PHPArray() );
		$context->setSession( new \Aimeos\Base\Session\None() );

		$object = new \Aimeos\Shop\Base\View( $config, $i18n, $support );

		$this->assertInstanceOf( '\Aimeos\Base\View\Iface', $object->create( $context, array() ) );
	}
}
