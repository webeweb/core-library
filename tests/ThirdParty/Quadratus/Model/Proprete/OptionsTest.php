<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Options;

/**
 * Options test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class OptionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Options();

        $this->assertNull($obj->getBooleen());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getNumerique());
        $this->assertNull($obj->getString());
    }

    /**
     * Tests the setBooleen() method.
     *
     * @return void
     */
    public function testSetBooleen() {

        $obj = new Options();

        $obj->setBooleen(true);
        $this->assertEquals(true, $obj->getBooleen());
    }

    /**
     * Tests the setDateHeure() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeure() {

        // Set a Date/time mock.
        $dateHeure = new DateTime("2018-09-10");

        $obj = new Options();

        $obj->setDateHeure($dateHeure);
        $this->assertSame($dateHeure, $obj->getDateHeure());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new Options();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setNumerique() method.
     *
     * @return void
     */
    public function testSetNumerique() {

        $obj = new Options();

        $obj->setNumerique(10.092018);
        $this->assertEquals(10.092018, $obj->getNumerique());
    }

    /**
     * Tests the setString() method.
     *
     * @return void
     */
    public function testSetString() {

        $obj = new Options();

        $obj->setString("string");
        $this->assertEquals("string", $obj->getString());
    }
}
