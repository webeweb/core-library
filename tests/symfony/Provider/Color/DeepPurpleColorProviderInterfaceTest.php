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

use WBW\Library\Symfony\Provider\Color\DeepPurpleColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Deep purple color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class DeepPurpleColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("deep-purple", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_NAME);

        $this->assertEquals("#EDE7F6", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_50);
        $this->assertEquals("#D1C4E9", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_100);
        $this->assertEquals("#B39DDB", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_200);
        $this->assertEquals("#9575CD", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_300);
        $this->assertEquals("#7E57C2", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_400);
        $this->assertEquals("#673AB7", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_500);
        $this->assertEquals("#5E35B1", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_600);
        $this->assertEquals("#512DA8", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_700);
        $this->assertEquals("#4527A0", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_800);
        $this->assertEquals("#311B92", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_900);
        $this->assertEquals("#B388FF", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A100);
        $this->assertEquals("#7C4DFF", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A200);
        $this->assertEquals("#651FFF", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A400);
        $this->assertEquals("#6200EA", DeepPurpleColorProviderInterface::DEEP_PURPLE_COLOR_A700);
    }
}
