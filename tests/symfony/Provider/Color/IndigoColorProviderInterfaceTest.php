<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Color;

use WBW\Library\Symfony\Provider\Color\IndigoColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Indigo color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class IndigoColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("indigo", IndigoColorProviderInterface::INDIGO_COLOR_NAME);

        $this->assertEquals("#E8EAF6", IndigoColorProviderInterface::INDIGO_COLOR_50);
        $this->assertEquals("#C5CAE9", IndigoColorProviderInterface::INDIGO_COLOR_100);
        $this->assertEquals("#9FA8DA", IndigoColorProviderInterface::INDIGO_COLOR_200);
        $this->assertEquals("#7986CB", IndigoColorProviderInterface::INDIGO_COLOR_300);
        $this->assertEquals("#5C6BC0", IndigoColorProviderInterface::INDIGO_COLOR_400);
        $this->assertEquals("#3F51B5", IndigoColorProviderInterface::INDIGO_COLOR_500);
        $this->assertEquals("#3949AB", IndigoColorProviderInterface::INDIGO_COLOR_600);
        $this->assertEquals("#303F9F", IndigoColorProviderInterface::INDIGO_COLOR_700);
        $this->assertEquals("#283593", IndigoColorProviderInterface::INDIGO_COLOR_800);
        $this->assertEquals("#1A237E", IndigoColorProviderInterface::INDIGO_COLOR_900);
        $this->assertEquals("#8C9EFF", IndigoColorProviderInterface::INDIGO_COLOR_A100);
        $this->assertEquals("#536DFE", IndigoColorProviderInterface::INDIGO_COLOR_A200);
        $this->assertEquals("#3D5AFE", IndigoColorProviderInterface::INDIGO_COLOR_A400);
        $this->assertEquals("#304FFE", IndigoColorProviderInterface::INDIGO_COLOR_A700);
    }
}
