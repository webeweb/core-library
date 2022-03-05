<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestToast;

/**
 * Abstract toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractToastTest extends AbstractTestCase {

    /**
     * Tests setContent()
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestToast();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestToast();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestToast();

        $this->assertEquals("t", $obj->getType());
        $this->assertEquals("c", $obj->getContent());
    }
}
