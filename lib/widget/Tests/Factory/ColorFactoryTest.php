<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Factory;

use WBW\Library\Widget\Component\Color\AmberColorInterface;
use WBW\Library\Widget\Component\Color\BlackColorInterface;
use WBW\Library\Widget\Component\Color\BlueColorInterface;
use WBW\Library\Widget\Component\Color\BlueGreyColorInterface;
use WBW\Library\Widget\Component\Color\BrownColorInterface;
use WBW\Library\Widget\Component\Color\CyanColorInterface;
use WBW\Library\Widget\Component\Color\DeepOrangeColorInterface;
use WBW\Library\Widget\Component\Color\DeepPurpleColorInterface;
use WBW\Library\Widget\Component\Color\GreenColorInterface;
use WBW\Library\Widget\Component\Color\GreyColorInterface;
use WBW\Library\Widget\Component\Color\IndigoColorInterface;
use WBW\Library\Widget\Component\Color\LightBlueColorInterface;
use WBW\Library\Widget\Component\Color\LightGreenColorInterface;
use WBW\Library\Widget\Component\Color\LimeColorInterface;
use WBW\Library\Widget\Component\Color\OrangeColorInterface;
use WBW\Library\Widget\Component\Color\PinkColorInterface;
use WBW\Library\Widget\Component\Color\PurpleColorInterface;
use WBW\Library\Widget\Component\Color\RedColorInterface;
use WBW\Library\Widget\Component\Color\TealColorInterface;
use WBW\Library\Widget\Component\Color\WhiteColorInterface;
use WBW\Library\Widget\Component\Color\YellowColorInterface;
use WBW\Library\Widget\Factory\ColorFactory;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Color factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Factory
 */
class ColorFactoryTest extends AbstractTestCase {

    /**
     * Test newMaterialDesignColorPalette()
     *
     * @return void
     */
    public function testNewMaterialDesignColorPalette(): void {

        $res = ColorFactory::newMaterialDesignColorPalette();
        $this->assertCount(21, $res);

        $i = -1;

        $this->assertInstanceOf(RedColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(PinkColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(PurpleColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(DeepPurpleColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(IndigoColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(BlueColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(LightBlueColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(CyanColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(TealColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(GreenColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(LightGreenColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(LimeColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(YellowColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(AmberColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(OrangeColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(DeepOrangeColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(BrownColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(GreyColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(BlueGreyColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(BlackColorInterface::class, $res[++$i]);
        $this->assertInstanceOf(WhiteColorInterface::class, $res[++$i]);
    }
}
