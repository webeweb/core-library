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

use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Description test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class DescTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Desc();
        $obj->setContent("content");
        $obj->setLang("lang");

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertArrayHasKey("lang", $res);
        $this->assertArrayHasKey("content", $res);
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Desc();
        $obj->setContent("content");
        $obj->setLang("lang");

        $res = '<desc lang="lang">content</desc>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("desc", Desc::DOM_NODE_NAME);

        $obj = new Desc();

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getLang());
    }
}
