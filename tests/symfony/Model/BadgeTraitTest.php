<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\BadgeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestBadgeTrait;

/**
 * Badge trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class BadgeTraitTest extends AbstractTestCase {

    /**
     * Tests setBadge()
     *
     * @return void
     */
    public function testSetBadge(): void {

        // Set a Badge mock.
        $badge = $this->getMockBuilder(BadgeInterface::class)->getMock();

        $obj = new TestBadgeTrait();

        $obj->setBadge($badge);
        $this->assertSame($badge, $obj->getBadge());
    }
}
