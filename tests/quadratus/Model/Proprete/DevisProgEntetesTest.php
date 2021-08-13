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

use WBW\Library\Quadratus\Model\Proprete\DevisProgEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis prog entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisProgEntetesTest extends AbstractTestCase {

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new DevisProgEntetes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisProgEntetes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new DevisProgEntetes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisProgEntetes();

        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumProgramme());
    }
}
