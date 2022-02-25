<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\Options2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Options2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class Options2Test extends AbstractTestCase {

    /**
     * Tests setBooleen()
     *
     * @return void
     */
    public function testSetBooleen(): void {

        $obj = new Options2();

        $obj->setBooleen(true);
        $this->assertEquals(true, $obj->getBooleen());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Options2();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setDateHeure()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeure(): void {

        // Set a Date/time mock.
        $dateHeure = new DateTime("2018-09-10");

        $obj = new Options2();

        $obj->setDateHeure($dateHeure);
        $this->assertSame($dateHeure, $obj->getDateHeure());
    }

    /**
     * Tests setDescriptif()
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new Options2();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests setNumerique()
     *
     * @return void
     */
    public function testSetNumerique(): void {

        $obj = new Options2();

        $obj->setNumerique(10.092018);
        $this->assertEquals(10.092018, $obj->getNumerique());
    }

    /**
     * Tests setString()
     *
     * @return void
     */
    public function testSetString(): void {

        $obj = new Options2();

        $obj->setString("string");
        $this->assertEquals("string", $obj->getString());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Options2();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Options2();

        $this->assertNull($obj->getBooleen());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getNumerique());
        $this->assertNull($obj->getString());
        $this->assertNull($obj->getType());
    }
}
