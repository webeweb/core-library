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

namespace WBW\Library\XmlTv\Tests\Model;

use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Director test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class DirectorTest extends AbstractTestCase {

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Director();
        $obj->setContent("content");

        $res = '<director>content</director>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("director", Director::DOM_NODE_NAME);

        $obj = new Director();

        $this->assertNull($obj->getContent());
    }
}
