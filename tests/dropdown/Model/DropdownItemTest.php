<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Dropdown\Tests\Model;

use JsonSerializable;
use WBW\Library\Dropdown\Model\DropdownItem;
use WBW\Library\Dropdown\Model\DropdownItemInterface;
use WBW\Library\Dropdown\Tests\AbstractTestCase;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Dropdown item test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Dropdown\Tests\Model
 */
class DropdownItemTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $data = file_get_contents(__DIR__ . "/DropdownItemTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new DropdownItem();
        $obj->setByDefault(true);
        $obj->setLabel(BaseSerializerKeys::LABEL);
        $obj->setPosition(0);

        $res = $obj->jsonSerialize();
        $this->assertCount(3, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setByDefault()
     *
     * @return void
     */
    public function testSetByDefault(): void {

        $obj = new DropdownItem();

        $obj->setByDefault(true);
        $this->assertTrue($obj->getByDefault());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DropdownItem();

        $this->assertInstanceOf(DropdownItemInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getPosition());

        $this->assertNUll($obj->getByDefault());
    }
}
