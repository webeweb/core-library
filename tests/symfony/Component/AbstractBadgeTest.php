<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component;

use WBW\Library\Symfony\Component\BadgeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Component\TestBadge;

/**
 * Abstract badge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component
 */
class AbstractBadgeTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBadge("danger");

        $this->assertInstanceOf(BadgeInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());
    }
}
