<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringUrlTrait;

/**
 * String URL trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringUrlTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringUrlTrait();

        $this->assertNull($obj->getUrl());
    }

    /**
     * Tests the setUrl() method.
     *
     * @return void
     */
    public function testSetUrl() {

        $obj = new TestStringUrlTrait();

        $obj->setUrl("Url");
        $this->assertEquals("Url", $obj->getUrl());
    }
}
