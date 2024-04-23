<?php

declare(strict_types = 1);

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
use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Symfony\Assets\AlertInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestAlert;

/**
 * Abstract alert test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractAlertTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractAlertTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestAlert("type");
        $obj->setContent(SerializerKeys::CONTENT);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAlert("danger");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(AlertInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());
    }
}
