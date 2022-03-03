<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Factory;

use WBW\Library\Symfony\Factory\ColorFactory;
use WBW\Library\Symfony\Provider\Color\AmberColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\BlackColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\BlueColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\BlueGreyColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\BrownColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\CyanColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\DeepOrangeColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\DeepPurpleColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\GreenColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\GreyColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\IndigoColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\LightBlueColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\LightGreenColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\LimeColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\OrangeColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\PinkColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\PurpleColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\RedColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\TealColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\WhiteColorProviderInterface;
use WBW\Library\Symfony\Provider\Color\YellowColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Factory
 */
class ColorFactoryTest extends AbstractTestCase {

    /**
     * Tests newMaterialDesignColorPalette()
     *
     * @return void
     */
    public function testNewMaterialDesignColorPalette(): void {

        $res = ColorFactory::newMaterialDesignColorPalette();
        $this->assertCount(21, $res);

        $i = 0;

        $this->assertInstanceOf(RedColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(PinkColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(PurpleColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(DeepPurpleColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(IndigoColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(BlueColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(LightBlueColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(CyanColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(TealColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(GreenColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(LightGreenColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(LimeColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(YellowColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(AmberColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(OrangeColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(DeepOrangeColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(BrownColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(GreyColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(BlueGreyColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(BlackColorProviderInterface::class, $res[$i++]);
        $this->assertInstanceOf(WhiteColorProviderInterface::class, $res[$i]);
    }
}
