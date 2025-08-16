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

use InvalidArgumentException;
use Throwable;
use WBW\Library\XmlTv\Model\Length;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Length test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class LengthTest extends AbstractTestCase {

    /**
     * Test enumUnits()
     *
     * @return void
     */
    public function testEnumUnits(): void {

        $res = [
            Length::UNITS_HOURS,
            Length::UNITS_MINUTES,
            Length::UNITS_SECONDS,
        ];
        $this->assertEquals($res, Length::enumUnits());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Length();
        $obj->setContent("content");
        $obj->setUnits(Length::UNITS_HOURS);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertArrayHasKey("units", $res);
        $this->assertArrayHasKey("content", $res);
    }

    /**
     * Test setUnits()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetUnits(): void {

        $obj = new Length();

        $obj->setUnits("hours");
        $this->assertEquals("hours", $obj->getUnits());
    }

    /**
     * Test setUnits()
     *
     * @return void
     */
    public function testSetUnitsWithInvaliArgumentException(): void {

        $obj = new Length();

        try {
            $obj->setUnits("units");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The units "units" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Length();
        $obj->setContent("content");
        $obj->setUnits(Length::UNITS_HOURS);

        $res = '<length units="hours">content</length>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("length", Length::DOM_NODE_NAME);
        $this->assertEquals("hours", Length::UNITS_HOURS);
        $this->assertEquals("minutes", Length::UNITS_MINUTES);
        $this->assertEquals("seconds", Length::UNITS_SECONDS);

        $obj = new Length();

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getUnits());
    }
}
