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

use WBW\Library\Core\Quadratus\Model\Proprete\DevisProgEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Devis prog entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class DevisProgEntetesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisProgEntetes();

        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumProgramme());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new DevisProgEntetes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis() {

        $obj = new DevisProgEntetes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme() {

        $obj = new DevisProgEntetes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

}
