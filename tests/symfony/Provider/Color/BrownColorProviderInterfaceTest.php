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

use WBW\Library\Symfony\Provider\Color\BrownColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Brown color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BrownColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("brown", BrownColorProviderInterface::BROWN_COLOR_NAME);

        $this->assertEquals("#EFEBE9", BrownColorProviderInterface::BROWN_COLOR_50);
        $this->assertEquals("#D7CCC8", BrownColorProviderInterface::BROWN_COLOR_100);
        $this->assertEquals("#BCAAA4", BrownColorProviderInterface::BROWN_COLOR_200);
        $this->assertEquals("#A1887F", BrownColorProviderInterface::BROWN_COLOR_300);
        $this->assertEquals("#8D6E63", BrownColorProviderInterface::BROWN_COLOR_400);
        $this->assertEquals("#795548", BrownColorProviderInterface::BROWN_COLOR_500);
        $this->assertEquals("#6D4C41", BrownColorProviderInterface::BROWN_COLOR_600);
        $this->assertEquals("#5D4037", BrownColorProviderInterface::BROWN_COLOR_700);
        $this->assertEquals("#4E342E", BrownColorProviderInterface::BROWN_COLOR_800);
        $this->assertEquals("#3E2723", BrownColorProviderInterface::BROWN_COLOR_900);
    }
}
