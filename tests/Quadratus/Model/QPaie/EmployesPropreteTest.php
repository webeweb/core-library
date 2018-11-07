<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use WBW\Library\Core\Quadratus\Model\QPaie\EmployesProprete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Employes proprete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmployesPropreteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmployesProprete();

        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getHotellerie());
        $this->assertNull($obj->getLivreur());
        $this->assertNull($obj->getModulation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPolyvalent());
    }

    /**
     * Tests the setControleur() method.
     *
     * @return void
     */
    public function testSetControleur() {

        $obj = new EmployesProprete();

        $obj->setControleur(true);
        $this->assertEquals(true, $obj->getControleur());
    }

    /**
     * Tests the setHotellerie() method.
     *
     * @return void
     */
    public function testSetHotellerie() {

        $obj = new EmployesProprete();

        $obj->setHotellerie(true);
        $this->assertEquals(true, $obj->getHotellerie());
    }

    /**
     * Tests the setLivreur() method.
     *
     * @return void
     */
    public function testSetLivreur() {

        $obj = new EmployesProprete();

        $obj->setLivreur(true);
        $this->assertEquals(true, $obj->getLivreur());
    }

    /**
     * Tests the setModulation() method.
     *
     * @return void
     */
    public function testSetModulation() {

        $obj = new EmployesProprete();

        $obj->setModulation(true);
        $this->assertEquals(true, $obj->getModulation());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmployesProprete();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPolyvalent() method.
     *
     * @return void
     */
    public function testSetPolyvalent() {

        $obj = new EmployesProprete();

        $obj->setPolyvalent(true);
        $this->assertEquals(true, $obj->getPolyvalent());
    }

}
