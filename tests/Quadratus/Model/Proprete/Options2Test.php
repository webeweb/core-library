<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\Options2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Options2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class Options2Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Options2();

        $this->assertNull($obj->getBooleen());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getNumerique());
        $this->assertNull($obj->getString());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setBooleen() method.
     *
     * @return void
     */
    public function testSetBooleen() {

        $obj = new Options2();

        $obj->setBooleen(true);
        $this->assertEquals(true, $obj->getBooleen());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Options2();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setDateHeure() method.
     *
     * @return void
     */
    public function testSetDateHeure() {

        $obj = new Options2();

        $obj->setDateHeure(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeure());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif() {

        $obj = new Options2();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setNumerique() method.
     *
     * @return void
     */
    public function testSetNumerique() {

        $obj = new Options2();

        $obj->setNumerique(10.092018);
        $this->assertEquals(10.092018, $obj->getNumerique());
    }

    /**
     * Tests the setString() method.
     *
     * @return void
     */
    public function testSetString() {

        $obj = new Options2();

        $obj->setString("string");
        $this->assertEquals("string", $obj->getString());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Options2();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

}
