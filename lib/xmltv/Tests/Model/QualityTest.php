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

use WBW\Library\XmlTv\Model\Quality;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Quality test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class QualityTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Quality();
        $obj->setContent("content");

        $res = $obj->jsonSerialize();
        $this->assertCount(1, $res);

        $this->assertArrayHasKey("content", $res);
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Quality();
        $obj->setContent("content");

        $res = '<quality>content</quality>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("quality", Quality::DOM_NODE_NAME);

        $obj = new Quality();

        $this->assertNull($obj->getContent());
    }
}
