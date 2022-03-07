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

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys;
use WBW\Library\Symfony\Assets\IconInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestIcon;

/**
 * Abstract icon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractIconTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractIconTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestIcon();
        $obj->setName(SerializerKeys::NAME);
        $obj->setStyle("style");

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestIcon();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(IconInterface::class, $obj);

        $this->assertNull($obj->getName());
        $this->assertNull($obj->getStyle());
    }
}
