<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringRouteTrait;

/**
 * String route trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringRouteTraitTest extends AbstractTestCase {

    /**
     * Test setRoute()
     *
     * @return void
     */
    public function testSetRoute(): void {

        $obj = new TestStringRouteTrait();

        $obj->setRoute("route");
        $this->assertEquals("route", $obj->getRoute());
    }
}
