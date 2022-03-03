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

use WBW\Library\Symfony\Provider\Color\GreyColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Grey color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class GreyColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("grey", GreyColorProviderInterface::GREY_COLOR_NAME);

        $this->assertEquals("#FAFAFA", GreyColorProviderInterface::GREY_COLOR_50);
        $this->assertEquals("#F5F5F5", GreyColorProviderInterface::GREY_COLOR_100);
        $this->assertEquals("#EEEEEE", GreyColorProviderInterface::GREY_COLOR_200);
        $this->assertEquals("#E0E0E0", GreyColorProviderInterface::GREY_COLOR_300);
        $this->assertEquals("#BDBDBD", GreyColorProviderInterface::GREY_COLOR_400);
        $this->assertEquals("#9E9E9E", GreyColorProviderInterface::GREY_COLOR_500);
        $this->assertEquals("#757575", GreyColorProviderInterface::GREY_COLOR_600);
        $this->assertEquals("#616161", GreyColorProviderInterface::GREY_COLOR_700);
        $this->assertEquals("#424242", GreyColorProviderInterface::GREY_COLOR_800);
        $this->assertEquals("#212121", GreyColorProviderInterface::GREY_COLOR_900);
    }
}
