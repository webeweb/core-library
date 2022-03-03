<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\Quote;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Quote test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class QuoteTest extends AbstractTestCase {

    /**
     * Tests setAuthor()
     *
     * @return void
     */
    public function testSetAuthor(): void {

        $obj = new Quote();

        $obj->setAuthor("author");
        $this->assertEquals("author", $obj->getAuthor());
    }

    /**
     * Tests setSaint()
     *
     * @return void
     */
    public function testSetSaint(): void {

        $obj = new Quote();

        $obj->setSaint("saint");
        $this->assertEquals("saint", $obj->getSaint());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Quote();

        $this->assertNull($obj->getAuthor());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getSaint());
    }
}
