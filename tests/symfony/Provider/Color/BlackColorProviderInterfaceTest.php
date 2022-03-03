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

use WBW\Library\Symfony\Provider\Color\BlackColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Black color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Color
 */
class BlackColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("black", BlackColorProviderInterface::BLACK_COLOR_NAME);

        $this->assertEquals("#000000", BlackColorProviderInterface::BLACK_COLOR_500);
    }
}
