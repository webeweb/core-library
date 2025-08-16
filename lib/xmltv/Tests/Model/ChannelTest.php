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

use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Channel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class ChannelTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Channel();
        $obj->setId("id");
        $obj->addDisplayName($this->displayName);
        $obj->addIcon($this->icon);
        $obj->addUrl($this->url);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("id", $res);
        $this->assertArrayHasKey("displayNames", $res);
        $this->assertArrayHasKey("icons", $res);
        $this->assertArrayHasKey("urls", $res);
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Channel();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Channel();
        $obj->setId("id");
        $obj->addDisplayName($this->displayName);
        $obj->addIcon($this->icon);
        $obj->addUrl($this->url);

        $res = '<channel id="id"><display-name></display-name><icon/><url></url></channel>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("channel", Channel::DOM_NODE_NAME);

        $obj = new Channel();

        $this->assertNull($obj->getId());
        $this->assertEquals([], $obj->getDisplayNames());
        $this->assertEquals([], $obj->getIcons());
        $this->assertEquals([], $obj->getProgrammes());
        $this->assertEquals([], $obj->getUrls());
    }
}
