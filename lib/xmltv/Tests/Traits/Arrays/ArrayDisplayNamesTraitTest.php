<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\DisplayName;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayDisplayNamesTrait;

/**
 * Array display names trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayDisplayNamesTraitTest extends AbstractTestCase {

    /**
     * Test addDisplayName()
     *
     * @return void
     */
    public function testAddDisplayName(): void {

        // Set a Display name mock.
        $displayName = new DisplayName();

        $obj = new TestArrayDisplayNamesTrait();

        $obj->addDisplayName($displayName);
        $this->assertSame($displayName, $obj->getDisplayNames()[0]);
        $this->assertEquals(1, $obj->getNumberDisplayNames());
        $this->assertTrue($obj->hasDisplayNames());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayDisplayNamesTrait();

        $this->assertEquals([], $obj->getDisplayNames());
        $this->assertEquals(0, $obj->getNumberDisplayNames());
        $this->assertFalse($obj->hasDisplayNames());
    }
}
