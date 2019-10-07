<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CalculIS;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Calcul i s model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CalculISTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CalculIS();

        $this->assertNull($obj->getCorrespondance());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantN1());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getTypeLigne());
    }

    /**
     * Tests the setCorrespondance() method.
     *
     * @return void
     */
    public function testSetCorrespondance() {

        $obj = new CalculIS();

        $obj->setCorrespondance("correspondance");
        $this->assertEquals("correspondance", $obj->getCorrespondance());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new CalculIS();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new CalculIS();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontantN1() method.
     *
     * @return void
     */
    public function testSetMontantN1() {

        $obj = new CalculIS();

        $obj->setMontantN1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantN1());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new CalculIS();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new CalculIS();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }
}
